<?php
   session_start();
   $Name = $_REQUEST["Name"];
   $Email = $_REQUEST["Email"];
   $Password = md5($_REQUEST["Password"]);
   $ConfirmPassword = md5($_REQUEST["ConfirmPassword"]);
   
   if($Password != $ConfirmPassword)
   {
       session_destroy();
       header("location: ../Views/Login.php");
       exit(0);
   }

   include_once "../Models/Users.php";
   $UserObj = new User();

   $CheckSimilarEmail = $UserObj->CheckSimilarEmail($Email);
   if($CheckSimilarEmail)
   {
        session_destroy();
        header("location: ../Views/Login.php");
        exit(0);
   }
   else
   {
        $UserObj->setName($Name);
        $UserObj->setEmail($Email);
        $UserObj->setPassword($Password);
        $UserObj->setRoleNumber(0);
        $UserObj->AddUser($UserObj);
        session_start();
        $_SESSION["ID"]=$UserObj->getID();
        header("location: ../Views/Index.php");
   }
   
?>