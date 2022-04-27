<?php
	//include '../config/log.db.inc.php';
	//include '../auth/sessioncheck.php';
	
	//Get the current user
	$username = $_SESSION['username'];
	$rights = $_SESSION['rights'];
	
	$query = "SELECT Item_ID, Batch_No, item.Name, Quantity, Unit_Of_Measurement, Origin, Entry_Date, CONCAT (Surname, ' ', users.Name) AS Reciepient, warehouse.Name AS Warehouse
				FROM item, wh_entry, users, warehouse
				WHERE wh_entry.Item = item.Item_ID
				AND wh_entry.Warehouse = warehouse.WH_ID
				AND wh_entry.Recipient = users.User_ID
				AND users.Username = '".$username."'";
	$result = mysqli_query($conn, $query);
	if(!$result)
	{
		echo mysqli_error($conn);
	}
	
?>