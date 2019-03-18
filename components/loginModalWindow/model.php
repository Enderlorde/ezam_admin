<?php
    $data = $_POST['data'];

    $db_host = "";
    $db_user = $data['user'];
    $db_password = $data['password'];
    $db_name = "ezam";

    include_once('../../db.class.php');

    try {

        $db = new DB($db_host, $db_user, $db_password, $db_name);

        // echo "<b>Tables from your database: </b><br/>";

        // echo "<pre>";
        // print_r($db->query("SHOW TABLES"));
        // echo "</pre>";

        // echo "<b>Books list: </b><br/>";

        // echo "<pre>";
        // //print_r($db->query("SELECT * FROM books"));
        // echo "</pre>";

    } catch (Exception $e) {
        echo $e->getMessage() . ':(';
    }

    ?>