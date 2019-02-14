<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>String & String Operator</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <h1>String & String Operator</h1>
  <?php 
    echo 'Hello world <br>';
    echo "Hello world <br>";
    echo "Hello \"w\"orld <br>";
    echo "Hello 'w'orld <br>";
    echo 'Hello "w"orld';
  ?>
  <h2>concatenation operator</h2>
  <?php 
    echo "Hello "."world";
  ?>
  <h2>String length function</h2>
  <?php
    echo strlen("Hello world");
  ?>
</body>
</html>