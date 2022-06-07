<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Pet</title>
</head>
<body>
    <form action="../../Controllers/PetCRUD/AddPet.php" method="Post" enctype="multipart/form-data">
        
        <input type="file" name="PetImage" placeholder="Photo" required><br><br>

        <input type="text" name="Name" placeholder="Name" required pattern="[a-zA-Z\s]+"><br><br>
        
        <select name="Gender" id="Gender">
            <option value= "Male">Male</option>
            <option value= "Female">Female</option>
        </select><br><br>

        <input type="text" name="Age" placeholder="Age" required pattern="[0-9]+"><br><br>

        <input type="text" name="PetType" placeholder="Pet Type" required pattern="[a-zA-Z\s]+"><br><br>

        <input type="text" name="BreedType" placeholder="Breed Type" required pattern="[a-zA-Z\s]+"><br><br>
        
        <input type="text" name="SkinColor" placeholder="Skin Color" required pattern="[a-zA-Z\s]+"><br><br>

        <select name="Aggressiveness" id="Aggressiveness">
            <?php
                $Myfile = fopen("../../Database/PetAggressivenessLevels.txt", "r+") or die("Unable to open file");
                while (!feof($Myfile)) 
                {
                    $line = fgets($Myfile);
                    $Arrayline = explode("../../Database/PetAggressivenessLevels.txt", $line);
                    $Word = trim($Arrayline[0]);
                    echo "<option value="."$Word".">"."$Word"."</option>";
                }
            ?>
        </select><br><br>
        
        <input type="text" name="Price" placeholder="Price" pattern="[0-9]+" required><br><br>
        
        <button>Send</button>
    </form>
</body>
</html>