<?php
    include_once('../../db.class.php');
    // Параметры подключения к бд
    $db_host = "";
    $db_user = "root";
    $db_password = "";
    $db_name = "ezam";

    $request = $_POST['action'];
    // Полученные из VM параметры: название и id темы
    $name = $_POST['name'];
    $code = $_POST['code'];

    $db = new DB($db_host,$db_user,$db_password,$db_name);

    if (function_exists($request)) {
        switch  ($request) {
            case "save" : save($db,$name,$code);
                break;
            case "remove" : remove($db,$code);
                break;
            default :
                die ("Функция запрещена!");
        }
    }

    function save($db,$name, $code){
        try {
            
            if ($code) 
                $db->query("UPDATE themes SET name='".$name."' WHERE code=".$code);
            else  
                $db->query("INSERT INTO Themes VALUES ('".$name."', DEFAULT)");
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    function remove($db,$code){
        try {
            if ($code) 
                $db->query("DELETE FROM themes WHERE code=".$code);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }