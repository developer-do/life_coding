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
  if(isset($_GET['id'])) {
    $filtered_id = mysqli_real_escape_string($conn, $_GET['id']);
    // mysqli_real_escape_string()
    // 인자로 들어온 데이터 중에서 sql을 공격, sql을 주입하는 공격과 관련된 여러가지 기호들을 문자로 바꿔버리는 함수.
    $sql = "SELECT * FROM topic WHERE id = {$filtered_id}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    $article['title']       = htmlspecialchars($row['title']);
    $article['description'] = htmlspecialchars($row['description']);

    $update_link = '<a href="update.php?id='.$_GET['id'].'">update</a>';
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
  <ol>
    <?= $list ?>
  </ol>
  <form action="process_update.php" method="POST">
    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
    <p><input type="text" name="title" placeholder="제목(title)" value="<?= $article['title'] ?>"></p>
    <p><textarea name="description" placeholder="내용(description)"><?= $article['description'] ?></textarea></p>
    <p><input type="submit" value="전송(submit)"></p>
  </form>
</body>
</html>