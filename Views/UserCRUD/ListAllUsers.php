<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lest All Users</title>
</head>
<body>
    <form action="../../Controllers/UserCRUD/DeleteUsers.php" method="Post">
        <h1>All Users</h1>
        <table border="5">

            <?php
                include_once "../../Models/Users.php";
                $UserObj = new User();
                $UserObj->ListAllUsers();
            ?>

            <tr>
                <td>
                    <input type="submit" value="Delete All selected">
                </td>
                <td>
                    <a href="AddUser.php">Add User</a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>