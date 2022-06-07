<?php
    include_once "../Classes/Users.php";
    foreach($_REQUEST["SelectedRows"] as $Id)
    {
        $UserObj = new User();
        $UserObj->FileManagerObj->DetleteSelectedlines($Id);
    }
    header("location: ListAllUsers.php");
?>