<?php
    $Name = $_REQUEST["Name"];
    $Gender = $_REQUEST["Gender"];
    $Age = $_REQUEST["Age"];
    $PetType = $_REQUEST["PetType"];
    $BreedType = $_REQUEST["BreedType"];
    $SkinColor = $_REQUEST["SkinColor"];
    $Aggressiveness = $_REQUEST["Aggressiveness"];
    $Price = $_REQUEST["Price"];
    //var_dump($_FILES);

    $targetDir = "../Petprofileimg/";
    $targetFile = $targetDir.basename($_FILES["PetImage"]["name"]);
    
    if(move_uploaded_file($_FILES["PetImage"]["tmp_name"], $targetFile))
    {
        echo "The file has been uploaded <br>";
    }

    include_once "../Classes/Pet.php";
    $PetObj = new Pet();
    $PetObj->setName($Name);
    $PetObj->setGender($Gender);
    $PetObj->setAge($Age);
    $PetObj->setPetType($PetType);
    $PetObj->setBreedType($BreedType);
    $PetObj->setSkinColor($SkinColor);
    $PetObj->setAggressiveness($Aggressiveness);
    $PetObj->setImageDirectory($targetFile);
    $PetObj->setPrice($Price);
    $PetObj->AddPet($PetObj);
?>