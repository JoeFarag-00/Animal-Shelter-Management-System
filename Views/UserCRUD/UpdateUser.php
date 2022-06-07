<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
</head>
<body>
    <form action="../../Controllers/UserCRUD/UpdateUser.php" method="Post">
        <?php
            include_once "../../Models/Users.php";
            $UserObj = new User();
            $User = $UserObj->GetUserById($_REQUEST["Id"]);

            echo "<input type=hidden id=hidden_username name = ID value=".$_REQUEST["Id"].">
            Name: <input type=\"text\" Value=".$User->getName()." name = \"Name\" required pattern=\"[a-zA-Z\s]+\"><br><br>
            Email: <input type=\"Email\" Value=".$User->getEmail()." name = \"Email\" required><br><br>
            Password: <input type=\"Password\" Placeholder=\"New password\" name = \"Password\"><br><br>
            Confirm Password: <input type=\"Password\" Placeholder=\"Confirm new password\" name = \"ConfirmPassword\"><br><br>";

            include_once "../../Models/RoleTypes.php";
            $RoleType = new RolesType();
            $Role = $RoleType->GetRoleType($User->getRoleNumber());
            echo "Role type: 
            <select name=\"Role\" id=\"Role\">
                
                <option value=".$Role.">".$Role."</option>".

                include_once "../../Models/RoleTypes.php";
                $RoleObj = new RolesType();
                $RoleObj->ListallRoles().

            "</select>"
            ?>
            <br><br>
            <input type = Submit id = Buttons>
    </form>
</body>
</html>