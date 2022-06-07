<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Pet</title>
</head>
<body>
    <form action="../../Controllers/PetCRUD/UpdatePet.php" method="Post">
        <?php
            include_once "../../Models/Pet.php";
            $PetObj = new Pet();
            $Pet = $PetObj->GetPetById($_REQUEST["Id"]);

            echo "<input type=hidden id=hidden_username name = ID value=".$_REQUEST["Id"].">
            Name: <input type=\"text\" Value=".$Pet->getName()." name = \"Name\" required pattern=\"[a-zA-Z\s]+\"><br><br>

            Gender: <select name=\"Gender\" id=\"Gender\">
                        <option value=".$Pet->getGender().">".$Pet->getGender()."</option>

                        <option value= \"Male\">Male</option>
                        <option value= \"Female\">Female</option>
                    </select><br><br>

            Age: <input type=\"text\" Value=".$Pet->getAge()." name = \"Age\" required pattern=\"[0-9]\"><br><br>
            Pet Type: <input type=\"text\" Value=".$Pet->getPetType()." name = \"PetType\" required pattern=\"[a-zA-Z\s]+\"><br><br>
            Breed Type: <input type=\"text\" Value=".$Pet->getBreedType()." name = \"BreedType\" required pattern=\"[a-zA-Z\s]+\"><br><br>
            Skin color: <input type=\"text\" Value=".$Pet->getSkinColor()." name = \"SkinColor\" required pattern=\"[a-zA-Z\s]+\"><br><br>

            Aggressiveness level: <select name=\"Aggressiveness\" id=\"Aggressiveness\">
            <option value=".$Pet->getAggressiveness().">".$Pet->getAggressiveness()."</option>";

            $Myfile = fopen("../../Database/PetAggressivenessLevels.txt", "r+") or die("Unable to open file");
            while (!feof($Myfile)) 
            {
                $line = fgets($Myfile);
                $Arrayline = explode("../../Database/PetAggressivenessLevels.txt", $line);
                $Word = trim($Arrayline[0]);
                echo "<option value="."$Word".">"."$Word"."</option>";
            }

            echo "</select><br><br>
            <input type=\"file\" name=\"PetImage\" placeholder=\"Photo\" value = ". $PetObj->getImageDirectory()." required><br><br>
            <input type=\"int\" name=\"Price\" placeholder=\"Price\" pattern=\"[0-9]+\" required><br><br>";
        ?>
        <br><br>
        <input type = Submit id = Buttons>
    </form>
</body>
</html>