<?php
  function print_title() {
    if(isset($_GET['id'])) {
      echo htmlspecialchars($_GET['id']);
    } else {
      echo "Welcome";
    }    
  }

  function print_description() {
    if(isset($_GET['id'])) {
      $basename = basename($_GET['id']);
      echo htmlspecialchars(file_get_contents("data/".$basename));
    } else {
      echo "Welcome to the PHP!!!";
    }
  }

  function print_list() {
    $dir = './data';
    $list = scandir($dir);
    
    $i = 0;
    while($i < count($list)) {
      $title = htmlspecialchars($list[$i]);
      if($list[$i] != '.'){
        if($list[$i] != '..') {
          echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>";
        }
      }
      $i++;
    }
  }
?>