<?php
  $conn = mysqli_connect(
    'localhost',
    'root',
    'skdicls1',
    'opentutorials'
  );
  $sql = "SELECT * FROM topic WHERE id = 11";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  echo '<h1>'.$row['title'].'</h1>';
  echo '<p>'.$row['description'].'</p>';
?>
