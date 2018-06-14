<?php

function getTuto()
{
  
  $query = $db->prepare('SELECT * FROM tuto');
  $query->execute();

  return $query->fetchAll();
}















 ?>
