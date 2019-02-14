<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <h1>while</h1>
  <?php
    echo '1<br>';
    $i = 0;
    while($i < 3) {
      echo '2<br>';
      $i++;
    }
    echo '3<br>';
  ?>
</body>
</html>