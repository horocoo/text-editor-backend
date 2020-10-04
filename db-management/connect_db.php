<?php 
    if (!isset($CONNECT_DB)){
        $CONNECT_DB = true;
        $db_login = 'phpmyadmin';
        $db_password = 'password';
        try {
            $db = new PDO(
                'mysql: host=localhost; dbname=wsf_horocoo',
                $db_login, 
                $db_password
            );
        } catch (PDOException $e){
            print('Error' . $e->getMessage() . '<br/>');
            die();
        }
    }
?>