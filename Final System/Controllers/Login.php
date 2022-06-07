<?php
    session_start();
    $ID = $_REQUEST["ID"];
    $Password = md5($_REQUEST["Password"]);
    
    include_once "../Models/Users.php";
    $UserObj = new User();
    $LoginTrueOrFalse = $UserObj->Login($ID, $Password);

    if($LoginTrueOrFalse)
    {
        $_SESSION["ID"] = $ID;
        $User = $UserObj->GetUserById($ID);
        
        include_once "../Models/Permissions.php";
        $PermissionObj = new Permission();
        $Directory = $PermissionObj->GetDirectoryByRoleNumber($User->getRoleNumber());
        header("location:".$Directory."?ID=".$ID);
    }
    else
    {
        header("location: ../Views/Login.php");
    }
?>