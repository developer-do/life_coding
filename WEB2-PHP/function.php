<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>function</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <h1>function</h1>
  <?php
    $str = "Lorem ipsum dolor sit amet consectetur, adipisicing elit.
    Accusamus consectetur quibusdam deserunt a corrupti quis possimus sequi? Earum animi error soluta molestias fugiat, quidem aut, facere maiores, rerum quos ratione?";
    echo $str;
  ?>
  <h2>strlen()</h2>
  <?php
    echo strlen($str);
  ?>

  <h2>nl2br</h2>
  <?php
    echo nl2br($str);
  ?>
</body>
</html>