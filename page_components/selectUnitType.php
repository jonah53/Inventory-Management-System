<?php
  $query = 'SELECT Unit_ID, Unit_Type FROM unit_type
                   ORDER BY Unit_ID ASC';
  $result = mysqli_query($conn, $query);

  echo '<option value"">Select Unit Type</option>';
  while($row=mysqli_fetch_row($result))
  {
      echo '<option value="'. $row[0] . '">'. $row[1] .' </option>';
  }
?>
