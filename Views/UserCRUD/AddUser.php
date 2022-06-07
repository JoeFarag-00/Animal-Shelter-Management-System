<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
</head>

<body>
    <form action="../../Controllers/UserCRUD/AddUser.php" method="post">
        Name: <input type="text" placeholder="Name" name = "Name" required pattern="[a-zA-Z\s]+"><br><br>
        Email: <input type="Email" placeholder="Email" name = "Email" required><br><br>
        Password: <input type="Password" placeholder="Password" name = "Password" required><br><br>
        Confirm Password: <input type="Password" placeholder="ConfirmPassword" name = "ConfirmPassword" required><br><br>

        Role type: 
        <select name="Role" id="Role">
            <?php
                include_once "../../Models/RoleTypes.php";
                $RoleObj = new RolesType();
                $RoleObj->ListallRoles();
            ?>
        </select>

        <br><br>
        <input type="Submit" id = "Buttons">
    </form>
    
</body>
</html>