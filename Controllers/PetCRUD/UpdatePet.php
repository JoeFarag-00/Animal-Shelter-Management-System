<?php
    $ID = $_REQUEST["ID"];
    $Name = $_REQUEST["Name"];
    $Gender = $_REQUEST["Gender"];
    $Age = $_REQUEST["Age"];
    $PetType = $_REQUEST["PetType"];
    $BreedType = $_REQUEST["BreedType"];
    $SkinColor = $_REQUEST["SkinColor"];
    $Aggressiveness = $_REQUEST["Aggressiveness"];
    $ImageDirectory = $_REQUEST["PetImage"];
    $Price = $_REQUEST["Price"];
    $targetDir = "../../Database/Petprofileimg/";
    $targetFile = $targetDir.basename($_FILES["PetImage"]["name"]);
    
    if(move_uploaded_file($_FILES["PetImage"]["tmp_name"], $targetFile))
    {
        echo "The file has been uploaded <br>";
    }
    $PetObj = new Pet();
    $Separator = $PetObj->FileManagerObj->getSeparator();
    $TargetLine = $PetObj->FileManagerObj->GetLineById($ID);

    $Arrayline = explode($Separator, $TargetLine);
    $LineToAdd = $ID. $Separator. $Name. $Separator. $ImageDirectory.$Separator. $Gender. $Separator. $Age. $Separator. $PetType. $Separator. $BreedType. $Separator. $SkinColor.$Separator. $Aggressiveness.$Separator. $Price."\r\n";
    $PetObj->FileManagerObj->UpdateRecord($TargetLine, $LineToAdd);
?>