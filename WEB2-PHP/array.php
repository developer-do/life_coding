<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Array</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <h1>Array</h1>
  <?php
    $coworkers = array('egoing', 'leezche', 'duru', 'taeho');
    echo $coworkers[1]."<br>";
    echo $coworkers[3]."<br>";
    echo count($coworkers);
    var_dump(count($coworkers));
    echo "<br>";
    array_push($coworkers, 'dohyun', 'minji');
    array_unshift($coworkers, '12', '34');
    $i = 0;
    while($i < count($coworkers)) {
      echo ($i + 1).".".$coworkers[$i]."<br>";
      $i++;
    }

    var_dump($coworkers);
  ?>

</body>
</html>