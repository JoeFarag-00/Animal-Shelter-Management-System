<?php
    session_start();
    $Name = $_REQUEST["Name"];
    $Email = $_REQUEST["Email"];
    $Password = md5($_REQUEST["Password"]);
    $ConfirmPassword = md5($_REQUEST["ConfirmPassword"]);
    $RoleType = $_REQUEST["Role"];
    
    if($Password != $ConfirmPassword)
    {
        session_destroy();
        header("location: ../../Views/UserCRUD/AddUser.php");
        exit(0);
    }

    include_once "../../Models/RoleTypes.php";
    $RoleTypeObj = new RolesType();
    $RoleNumber = $RoleTypeObj->GetRoleNumber($RoleType);

    include_once "../../Models/Users.php";
    $UserObj = new User();
    $UserObj->setName($Name);
    $UserObj->setEmail($Email);
    $UserObj->setPassword($Password);
    $UserObj->setRoleNumber($RoleNumber);
    $UserObj->AddUser($UserObj);
    header("location: ../../Views/UserCRUD/ListAllUsers.php");
?>