<?php 
    $db_date = $db->prepare('SELECT * FROM `editing_table`');
    $db_date->execute();
    $allArticles = $db_date->fetchAll();
?>