<?php
    include_once "FileManager.php";
    class RolesType
    {
        private $RoleNumber;
        private $RoleType;
        public $FileManagerObj;

        function __construct()
        {
            $this->FileManagerObj = new FileManager();
            $this->FileManagerObj->setFileName("../../Database/Role types.txt");
            $this->FileManagerObj->setSeparator("~#~#");
        }

        function GetRoleNumber($RoleType)
        {
            $MyReturn = new RolesType();
            $Myfile = fopen($this->FileManagerObj->getFileName(), "r+") or die("Unable to open file");
            fgets($Myfile);
            while (!feof($Myfile)) 
            {
                $line = fgets($Myfile);
                $Arrayline = explode($this->FileManagerObj->getSeparator(), $line);
                if($RoleType == trim($Arrayline[1]))
                {
                    return $Arrayline[0];
                }
            }
            fclose($Myfile);
        }

        function GetRoleType($RoleNumber)
        {
            $RoleNumber = trim($RoleNumber);
            $MyReturn = new RolesType();
            $Myfile = fopen($this->FileManagerObj->getFileName(), "r+") or die("Unable to open file");
            fgets($Myfile);
            while (!feof($Myfile)) 
            {
                $line = fgets($Myfile);
                $Arrayline = explode($this->FileManagerObj->getSeparator(), $line);
                if($RoleNumber == $Arrayline[0])
                {
                    return $Arrayline[1];
                }
            }
            fclose($Myfile);
        }

        function ListallRoles()
        {
            $Myfile = fopen($this->FileManagerObj->getFileName(), "r+") or die("Unable to open file");
            fgets($Myfile);
            while (!feof($Myfile)) 
            {
                $line = fgets($Myfile);
                $Arrayline = explode($this->FileManagerObj->getSeparator(), $line);
                $Word = trim($Arrayline[1]);
                echo "<option value="."$Word".">"."$Word"."</option>";
            }
        }
    }
?>