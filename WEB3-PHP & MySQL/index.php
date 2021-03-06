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

  // Description Output
  $article = array(
    'title'         =>  'Welcome',
    'description'   =>  'Hello, web'
  );
  $update_link = '';
  $delete_link = '';
  $author      = '';
  if(isset($_GET['id'])) {
    $filtered_id = mysqli_real_escape_string($conn, $_GET['id']);
    // mysqli_real_escape_string()
    // 인자로 들어온 데이터 중에서 sql을 공격, sql을 주입하는 공격과 관련된 여러가지 기호들을 문자로 바꿔버리는 함수.
    $sql = "SELECT * FROM topic LEFT JOIN author ON topic.author_id = author.id WHERE topic.id = {$filtered_id}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    $article['title']       = htmlspecialchars($row['title']);
    $article['description'] = htmlspecialchars($row['description']);
    $article['name']        = htmlspecialchars($row['name']);

    $update_link = '<a href="update.php?id='.$_GET['id'].'">update</a>';
    $delete_link = '
      <form action="process_delete.php" method="POST">
        <input type="hidden" name="id" value="'.$_GET['id'].'">
        <input type="submit" value="delete">
      </form>
    ';
    $author = "<p>by {$article['name']}</p>";
  } 
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
  <p><a href="author.php">author</a></p>
  <ol>
    <?= $list ?>
  </ol>
  <a href="create.php">create</a>
  <?= $update_link ?>
  <?= $delete_link ?>
  <h2><?= $article['title'] ?></h2>
  <p><?= $article['description']?></p>
  <?= $author ?>
</body>
</html>