<?php

function getTopics()
{
  $db = dbConnect();
  $query = $db->prepare('SELECT * FROM topics');
  $query->execute();

  return $query->fetchAll();
}

function getTopics()
{
  $db = dbConnect();
  $query = $db->prepare('SELECT * FROM category');
  $query->execute();

  return $query->fetchAll();
}

 ?>
