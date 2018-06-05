<!DOCTYPE html>
<html>
  <head>
    <title>power 28</title>
    <?php require_once 'tools/head.php'; ?>
  </head>
  <body>
    <?php require_once 'tools/nav.php'; ?>

<?php
require_once('common.php');
$db = dbConnect();
session_start();

if (isset($_GET['page'])) {
  if ($_GET['page'] == 'FAQ') {
    require('controlers/FAQ.php');
  }elseif ($_GET['page'] == 'application') {
    require('controlers/application.php');
  }elseif ($_GET['page'] == 'tuto') {
    require('controlers/tuto.php');
  }else {
    require('controlers/index.php');
  }
}else {
  require('controlers/index.php');
}

 ?>

 <?php require_once 'tools/footer.php'; ?>
</body>
</html>
