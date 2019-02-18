<?php
  $conn = mysqli_connect(
    'localhost',
    'root',
    'skdicls1',
    'opentutorials'
  );
  // 1 row
  echo "<h1>single row</h1>";
  $sql = "SELECT * FROM topic WHERE id = 11";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  echo '<h3>'.$row['title'].'</h3>';
  echo '<p>'.$row['description'].'</p>';


  echo "<h1>multi row</h1>";
  $sql = "SELECT * FROM topic";
  $result = mysqli_query($conn, $sql);
  
  while($row = mysqli_fetch_array($result)) {
    echo '<h3>'.$row['title'].'</h3>';
    echo '<p>'.$row['description'].'</p>';
  }
?>
