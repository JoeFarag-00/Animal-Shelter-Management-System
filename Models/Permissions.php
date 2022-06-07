<?php
    include_once "FileManager.php";
    
    class Permission
    {
        private $RoleNumber;
        private $Directory;
        public $FileManagerObj;
        
        function __construct()
        {
            $this->FileManagerObj = new FileManager();
            $this->FileManagerObj->setFileName("../Database/Permissions.txt");
            $this->FileManagerObj->setSeparator("~#~#");
        }

        public function setRoleNumber($RoleNumber)
        {
            $this->RoleNumber = $RoleNumber;
        }

        public function getRoleNumber()
        {
            return $this->RoleNumber;
        }

        public function setDirectory($Directory)
        {
            $this->Directory = $Directory;
        }

        public function getDirectory()
        {
            return $this->Directory;
        }

        function GetDirectoryByRoleNumber($RoleNumber)
        {
            $RoleNumber = trim($RoleNumber);
            $Myfile = fopen($this->FileManagerObj->getFileName(), "r+") or die("Unable to open file");
            fgets($Myfile);
            while (!feof($Myfile)) 
            {
                $line = fgets($Myfile);
                $Arrayline = explode($this->FileManagerObj->getSeparator(), $line);
                if($RoleNumber == $Arrayline[0])
                {
                    return trim($Arrayline[1]);
                }
            }
            fclose($Myfile);
        }
    }
?>