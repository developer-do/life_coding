<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Function</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <h1>Function</h1>
  <h2>Basic</h2>
  <?php
    function basic() {
      print("Lorem ipsum dolor sit amet1<br>");
      print("Lorem ipsum dolor sit amet2<br>");
    }
    for($i = 0; $i < 10; $i++) {
      basic();
    }
  ?>

  <h2>parameter &amp; argument</h2>
  <?php
    function sum($para1, $para2) {
      print($para1+$para2);
      print("<br>");
    }

    sum(2,4);
    sum(4,6);
  ?>

  <h2>return</h2>
  <?php 
    function sum2($para1, $para2) {
      return $para1+$para2;
    }
    echo sum2(4,6);
    file_put_contents('result.txt', sum2(2,4));
  ?>
  
</body>
</html>