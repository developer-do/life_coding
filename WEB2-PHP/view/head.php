<?php require_once('lib/print.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php print_title() ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  
  <h1><a href="index.php">WEB</a></h1>
  <ol>
  <?php
    print_list();
  ?>
  </ol>