<?php


function getFAQ(){

  $db = dbConnect();

  $query = $db->prepare('SELECT * FROM faq');
  $query->execute();

	return $query->fetchAll();
}




 ?>
