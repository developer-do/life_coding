<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <h1>Comparison Operators &amp; Boolean data type</h1>
  <?php
    var_dump(0.1);
    echo "<br>";
    var_dump("name1" . "sa11");
    echo "<br>";
    var_dump(2 == 1);
    $arr = array();
  ?>
  <h2>1==1</h2>
  <?php var_dump(1 == 1); ?>

  <h2>1>1</h2>
  <?php var_dump(1 > 1); ?>

  <h2>1>=1</h2>
  <?php var_dump(1 >= 1); ?>

  <h2>test</h2>
  <?php var_dump($arr == false); ?>
</body>
</html>