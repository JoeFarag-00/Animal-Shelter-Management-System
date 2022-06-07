<?php
    include_once "../Classes/Pet.php";
    foreach($_REQUEST["SelectedRows"] as $Id)
    {
        $PetObj = new Pet();
        $PetObj->FileManagerObj->DetleteSelectedlines($Id);
    }
    header("location: ListAllPets.php");
?>