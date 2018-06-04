<?php

function getTuto()
{
  $db = dbConnect();

  $query = $db->prepare('SELECT * FROM tuto');
  $query->execute();

  return $query->fetchAll();
}















 ?>
