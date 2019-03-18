<?php
    include_once('../../db.class.php');
    
    $db_host = "";
    $db_user = "root";
    $db_password = "";
    $db_name = "ezam";

    try {

        $db = new DB($db_host, $db_user, $db_password, $db_name);
        echo json_encode($db->query("SELECT * FROM `questions` "));
    
    } catch (Exception $e) {
        echo $e->getMessage();
    }