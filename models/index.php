<?php

function getComment($limit=false)
{

$db = dbConnect();

  $queryString ='SELECT comment.*, user.company_name, user.img FROM comment JOIN user ON comment.user_id = user.id ORDER BY id DESC';
  if ($limit) {
    	$queryString .= ' limit 0, :limit';
  }

  $query = $db->prepare($queryString);

  if($limit) {
    $query->bindValue(':limit', (int)$limit, PDO::PARAM_INT);
  }

  $query->execute();

  $rows =  $query->fetchAll();


}







 ?>
