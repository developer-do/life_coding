<?php require('lib/print.php'); ?>
<?php require('view/head.php'); ?>
  <a href="create.php">create</a>
  <form action="create_process.php" method="post">
    <p>
      <input type="text" name="title" placeholder="TITLE">
    </p>
    <p>
      <textarea name="description" placeholder="Description"></textarea>
    </p>
    <p>
      <input type="submit" value="submit">
    </p>
  </form>
  <?php require('view/tail.php'); ?>

