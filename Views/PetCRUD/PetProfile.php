<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Pet</title>
</head>
<body>
    <form>
        <?php
            include_once "../../Models/Pet.php";
            $PetObj = new Pet();
            $Pet = $PetObj->GetPetById($_REQUEST["Id"]);
            
            echo "<input type=hidden id=hidden_Petname name = ID value=".$_REQUEST["Id"].">
            <img src=".$Pet->getImageDirectory()." alt=\"Image Not Found\"><br><br>
            ID: <label>".$Pet->getID()."</label> <br><br>
            Name: <label>".$Pet->getName()."</label> <br><br>
            Gender: <label>".$Pet->getGender()."</label><br><br>
            Age: <label>".$Pet->getAge()."</label><br><br>
            Pet Type: <label>".$Pet->getPetType()."</label><br><br>
            Breed Type: <label>".$Pet->getBreedType()."</label><br><br>
            Skin Color: <label>".$Pet->getSkinColor()."</label><br><br>
            Aggressiveness: <label>".$Pet->getAggressiveness()."</label><br><br>"
        ?>
    </form>
</body>
</html>