<?php
	include '../auth/sessioncheck.php';
	include '../config/log.db.inc.php';
	
	$_sn = stripslashes($_REQUEST['sn']);
	$sn = mysqli_real_escape_string($conn,$_sn);
	$_item = stripslashes($_REQUEST['item']);
	$item = mysqli_real_escape_string($conn,$_item);
	$_desc = stripslashes($_REQUEST['desc']);
	$desc = mysqli_real_escape_string($conn,$_desc);
	$_qty = stripslashes($_REQUEST['qty']);
	$qty = mysqli_real_escape_string($conn,$_qty);
	$_uom = stripslashes($_REQUEST['uom']);
	$uom = mysqli_real_escape_string($conn,$_uom);
	$_origin = stripslashes($_REQUEST['origin']);
	$origin = mysqli_real_escape_string($conn,$_origin);
	$_date = stripslashes($_REQUEST['date']);
	$date = mysqli_real_escape_string($conn,$_date);
	
	//Get the current user
	$username = $_SESSION['username'];
	$rights = $_SESSION['rights'];
	
	$query = "SELECT User_ID, Station FROM users WHERE Username = '".$username."'";
	$result = mysqli_query($conn,$query);
	if(!$result){
		echo mysqli_error($conn);
	}
	$row = mysqli_fetch_assoc($result);
	$user = $row['User_ID'];
	$warehouse = $row['Station'];
	
	//register the item
	$query2 = "INSERT INTO item (Item_ID, Serial_No, Name, Description)
					VALUES(Null, '".$sn."', '".$item."', '".$desc."')";
	$result2 = mysqli_query($conn, $query2);
	if(!$result2)
	{
		echo mysqli_error($conn);
	}
	$it = mysqli_insert_id($conn);
	
	//register item in warehouse entry
	$query3 = "INSERT INTO wh_entry(Entry_ID, Warehouse, Item, Quantity, Unit_Of_Measurement, origin, Requisition, Recipient, Entry_Date)
					VALUES(Null, '".$warehouse."', '".$it."', '".$qty."', '".$uom."', '".$origin."', Null, '".$user."', '".$date."')";
	$result3 = mysqli_query($conn,$query3);
	if(!$result3)
	{
		echo mysqli_error($conn);
	}
	header("location:../addEntry.php");
?>