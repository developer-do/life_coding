<?php
  function print_title() {
    if(isset($_GET['id'])) {
      echo $_GET['id'];
    } else {
      echo "Welcome";
    }    
  }

  function print_description() {
    if(isset($_GET['id'])) {
      echo file_get_contents('data/'.$_GET['id']);
    } else {
      echo "Welcome to the PHP!!!";
    }
  }

  function print_list() {
    $dir = './data';
    $list = scandir($dir);
    $i = 0;
    while($i < count($list)) {
      if($list[$i] != '.'){
        if($list[$i] != '..') {
          echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>";
        }
      }
      $i++;
    }
  }
?>