<?php
    include_once "../../Models/Pet.php";
    foreach($_REQUEST["SelectedRows"] as $Id)
    {
        $PetObj = new Pet();
        $PetObj->FileManagerObj->DetleteSelectedlines($Id);
    }
    header("location: ../../Views/PetCRUD/ListAllPets.php");
?>