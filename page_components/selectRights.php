<?php
  $query = 'SELECT Rights_ID, Rights FROM rights
                   ORDER BY Rights_ID ASC';
  $result = mysqli_query($conn, $query);

  echo '<option value"">Admin Rights</option>';
  while($row=mysqli_fetch_row($result))
  {
      echo '<option value="'. $row[0] . '">'. $row[1] . '</option>';
  }
?>
