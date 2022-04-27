<?php
  $query = 'SELECT PT_ID, Property_Type FROM property_type
                   ORDER BY PT_ID ASC';
  $result = mysqli_query($conn, $query);

  echo '<option value"">Select Property Type</option>';
  while($row=mysqli_fetch_row($result))
  {
      echo '<option value="'. $row[0] . '">'. $row[1] . '</option>';
  }
?>
