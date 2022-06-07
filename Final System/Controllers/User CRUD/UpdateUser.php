<?php
    include_once "../../Models/Users.php";
    $ID = $_REQUEST["ID"];
    $Name = $_REQUEST["Name"];
    $Email = $_REQUEST["Email"];
    $RoleType = $_REQUEST["Role"];
    if( !empty($_REQUEST["Password"]) And !empty($_REQUEST["ConfirmPassword"]))
    {
        if($_REQUEST["Password"] == $_REQUEST["ConfirmPassword"])
        {
            $Password = md5($_REQUEST["Password"]);
            $ConfirmPassword = md5($_REQUEST["ConfirmPassword"]);
            $Check = true;
        }
        else
        {
            header("location: ../../Views/User CRUD/UpdateUsers.php?Id=".$ID);
            exit(0);
        }
    }
    else
    {
        $Check = false;
    }

    $UserObj = new User();
    $Separator = $UserObj->FileManagerObj->getSeparator();
    $TargetLine = $UserObj->FileManagerObj->GetLineById($ID);

    include_once "../../Models/RoleTypes.php";
    $RoleObj = new RolesType();
    $RoleNumber = $RoleObj->GetRoleNumber($RoleType);

    $Arrayline = explode($Separator, $TargetLine);
    if($Check == true)
    {
        $LineToAdd = $ID. $Separator. $Name. $Separator.  $Email. $Separator. $Password. $Separator. $RoleNumber."\r\n";
    }
    else
    {
        $LineToAdd = $ID. $Separator. $Name. $Separator.  $Email. $Separator.$Arrayline[3].$Separator. $RoleNumber."\r\n";
    }
    $UserObj->FileManagerObj->UpdateRecord($TargetLine, $LineToAdd);
    header("location: ../../Views/ListAllUsers.php");
?>