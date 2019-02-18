<?php
  // MySQL Connect
  $conn = mysqli_connect(
    'localhost',
    'root',
    'skdicls1',
    'opentutorials'
  );

  // LIST Output
  $sql = "SELECT * FROM topic";
  $result = mysqli_query($conn, $sql);
  $list = '';
  while($row = mysqli_fetch_array($result)) {
    $escaped_title = htmlspecialchars($row['title']);
    $list .= "<li><a href='index.php?id={$row['id']}'>{$escaped_title}</a></li>";
  }

  $sql = "SELECT * FROM author";
  $result = mysqli_query($conn, $sql);
  $select_form = '<select name="author_id">';
  while($row = mysqli_fetch_array($result)){
    $select_form .= '<option value="'.$row['id'].'">'.$row['name'].'</option>';
  }
  $select_form .= '</select>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>WEB3 - PHP & MySQL</title>
</head>
<body>
  <h1><a href="index.php">WEB</a></h1>
  <ol>
    <?= $list ?>
  </ol>
  <form action="process_create.php" method="POST">
    <p><input type="text" name="title" placeholder="제목(title)"></p>
    <p><textarea name="description" placeholder="내용(description)"></textarea></p>
    <?= $select_form ?>
    <p><input type="submit" value="전송(submit)"></p>
  </form>
</body>
</html>