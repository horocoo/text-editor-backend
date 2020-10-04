<?php 
	if (isset($_COOKIE['editor'])){
		echo 'cookie exist';
	}else{
		require('create_article.php');
		echo 'article create';
	}
?>