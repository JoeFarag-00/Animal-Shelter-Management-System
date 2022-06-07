<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List All Pets</title>
</head>
<body>
    <form action="../../Controllers/PetCRUD/DeleteUsers.php" method="Post">
        <h1>All Pets</h1>
        <table border="5">
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Select</td>
                <td>Update</td>
                <td>Profile</td>
            </tr>

            <?php
                include_once "../../Models/Pet.php";
                $PetObj = new Pet();
                $PetObj->ListAllPets();
            ?>

            <tr>
                <td>
                    <input type="submit" value="Delete All selected">
                </td>
                <td>
                    <a href="AddPet.php">Add Pet</a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>