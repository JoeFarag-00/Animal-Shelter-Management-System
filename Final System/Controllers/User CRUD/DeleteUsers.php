<?php

    include_once "../../Models/Users.php";
    foreach($_REQUEST["SelectedRows"] as $Id)
    {
        $UserObj = new User();
        $UserObj->FileManagerObj->DetleteSelectedlines($Id);
    }
    header("location: ../../Views/User CRUD/ListAllUsers.php");
?>