<?php
    include_once "CommonAttributes.php";
    include_once "FileManager.php";
    class Pet extends CommonAttributes
    {
        Private $Gender;
        private $Age;
        private $PetType;
        private $BreedType;
        private $SkinColor;
        Private $Aggressiveness;
        private $ImageDirectory;
        Private $Price;
        public $FileManager;

        function __construct()
        {
            $this->FileManagerObj = new FileManager();
            $this->FileManagerObj->setFileName("../Database/Pet profile.txt");
            $this->FileManagerObj->setSeparator("~#~#");
        }

        public function setGender($Gender)
        {
            $this->Gender = $Gender;
        }

        public function getGender()
        {
            return $this->Gender;
        }
        
        public function setAge($Age)
        {
            $this->Age = $Age;
        }

        public function getAge()
        {
            return $this->Age;
        }

        public function setPetType($PetType)
        {
            $this->PetType = $PetType;
        }

        public function getPetType()
        {
            return $this->PetType;
        }

        public function setBreedType($BreedType)
        {
            $this->BreedType = $BreedType;
        }
        
        public function getBreedType()
        {
            return $this->BreedType;
        }

        public function setSkinColor($SkinColor)
        {
            $this->SkinColor = $SkinColor;
        }

        public function getSkinColor()
        {
            return $this->SkinColor;
        }

        public function setAggressiveness($Aggressiveness)
        {
            $this->Aggressiveness = $Aggressiveness;
        }

        public function getAggressiveness()
        {
            return $this->Aggressiveness;
        }

        public function setImageDirectory($ImageDirectory)
        {
            $this->ImageDirectory = $ImageDirectory;
        }

        public function getImageDirectory()
        {
            return $this->ImageDirectory;
        }
        
        public function setPrice($Price)
        {
            $this->Price = $Price;
        }
        
        public function getPrice()
        {
            return $this->Price;
        }

        function AddPet($PetObj)
        {
            $Separator = $this->FileManagerObj->getSeparator();
            $this->setID($this->FileManagerObj->getLastId() + 1);
            $Record = $this->getImageDirectory(). $Separator. $this->getID(). $Separator.  $this->getName(). $Separator. $this->getGender(). $Separator. $this->getAge(). $Separator. $this->getPetType(). $Separator. $this->getBreedType(). $Separator. $this->getSkinColor(). $Separator. $this->getAggressiveness()."\r\n";
            $this->FileManagerObj->StoreRecordinFile($Record);
        }

        function ListAllPets()
        {
            $Myfile = fopen($this->FileManagerObj->getFileName(), "r+") or die("Unable to open file");
            fgets($Myfile);
            while (!feof($Myfile))
            {
                $line = fgets($Myfile);
                if (empty(trim($line))) 
                {
                    break;
                }
                $Arrayline = explode($this->FileManagerObj->getSeparator(), $line);
                echo "<tr>";
                for ($i = 0; $i < 2; $i++)
                {
                    echo "<td>" . $Arrayline[$i] . "</td>";
                }
                echo "<td><input type = checkbox name = SelectedRows[] value =".$Arrayline[0]."></td>"."<td><a href = ../CRUD/UpdatePetProfile.php?Id=".$Arrayline[0].">Update</a></td>"."<td><a href = ../CRUD/PetProfile.php?Id=".$Arrayline[0].">Profile</a></td>";
                echo "</tr>";
            }
            fclose($Myfile);
        }

        function GetPetById($Id)
        {
            $PetObj = new Pet();
            $line = $this->FileManagerObj->GetLineById($Id);
            $ArrayLine = explode($this->FileManagerObj->getSeparator(), $line);
            $PetObj->setID($ArrayLine[0]);
            $PetObj->setName($ArrayLine[1]);
            $PetObj->setImageDirectory($ArrayLine[2]);
            $PetObj->setGender($ArrayLine[3]);
            $PetObj->setAge($ArrayLine[4]);
            $PetObj->setPetType($ArrayLine[5]);
            $PetObj->setBreedType($ArrayLine[6]);
            $PetObj->setSkinColor($ArrayLine[7]);
            $PetObj->setAggressiveness($ArrayLine[8]);
            return $PetObj;
        }
    }
?>