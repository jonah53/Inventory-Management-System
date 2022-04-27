<?php
  $query = 'SELECT P_ID, Property FROM property
                   ORDER BY P_ID ASC';
  $result = mysqli_query($conn, $query);

  echo '<option value"">Select Property</option>';
  while($row=mysqli_fetch_row($result))
  {
      echo '<option value="'. $row[0] . '">'. $row[1] .' </option>';
  }
?>
