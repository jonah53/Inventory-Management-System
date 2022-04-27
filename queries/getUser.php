<?php
  //require_once 'config/autodb.inc.php';

  $username = $_SESSION['username'];
  $rights = $_SESSION['rights'];

  $uquery = "SELECT * FROM users, warehouse 
				WHERE users.Station = warehouse.WH_ID
				AND Username = '".$username."'";
  $rquery = "SELECT * FROM rights WHERE R_ID = '".$rights."'";
  $image = "SELECT Filename FROM picture, users
            WHERE users.Picture = picture.Pic_ID
            AND users.Username = '".$username."'";

  $uresult = mysqli_query($conn,$uquery);
  $rresult = mysqli_query($conn,$rquery);
  $iresult = mysqli_query($conn,$image);

  $urow = mysqli_fetch_row($uresult);
  $rrow = mysqli_fetch_row($rresult);
  $img = mysqli_fetch_row($iresult);
?>
