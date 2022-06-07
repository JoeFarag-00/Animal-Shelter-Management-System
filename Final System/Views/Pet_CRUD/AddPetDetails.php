<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Pet</title>
</head>
<body>
    <form action="AddPetToFile.php" method="Post" enctype="multipart/form-data">
        
        <input type="file" name="PetImage" placeholder="Photo" required><br><br>

        <input type="text" name="Name" placeholder="Name" required><br><br>
        
        <select name="Gender" id="Gender">
            <option value= "Male">Male</option>
            <option value= "Female">Female</option>
        </select><br><br>

        <input type="text" name="Age" placeholder="Age" required><br><br>

        <input type="text" name="PetType" placeholder="Pet Type" required><br><br>

        <input type="text" name="BreedType" placeholder="Breed Type" required><br><br>
        
        <input type="text" name="SkinColor" placeholder="Skin Color" required><br><br>

        <select name="Aggressiveness" id="Aggressiveness">
            <option value= "Low">Low</option>
            <option value= "Mild">Mild</option>
            <option value= "High">High</option>
        </select><br><br>
        
        <input type="int" name="Price" placeholder="Price" required><br><br>
        
        <button>Send</button>
    </form>
</body>
</html>