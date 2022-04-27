<?php
  $query = 'SELECT O_ID, Title, Names FROM owner
                   ORDER BY O_ID ASC';
  $result = mysqli_query($conn, $query);

  echo '<option value"">Select Property Owner</option>';
  while($row=mysqli_fetch_row($result))
  {
      echo '<option value="'. $row[0] . '">'. $row[1] .' '.$row[2]. '</option>';
  }
?>
