<?php require('connect_db.php')?>
<?php
    $user_ip = $_SERVER['REMOTE_ADDR'];
    $user_time = microtime();
    $media_folder = "Folder" . $user_ip . "t" . $user_time;
    $xml_url = "XML" . $user_ip . "t" . $user_time;
    $newArticle = $db->prepare("INSERT INTO editing_table (media_folder, xml_url) VALUES (:media_folder, :xml_url)");
    $newArticle->bindparam(':media_folder', $media_folder);
    $newArticle->bindparam(':xml_url', $xml_url);
    $result = $newArticle->execute();
    if(!($result)){
        echo 'ERROR!';
        die();
    }
    setcookie('editor', "$user_ip$user_time)");
    setcookie('user_ip', "$user_ip)");
    setcookie('user_time', "$user_time)");
    
?>