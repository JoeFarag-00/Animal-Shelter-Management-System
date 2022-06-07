<?php
    include_once "FileManager.php";
    include_once "UserAttributes.php";
    include_once "RoleTypes.php";
    class User extends UserAttributes
    {
        public $FileManagerObj;
        
        function __construct()
        {
            $this->FileManagerObj = new FileManager();
            $this->FileManagerObj->setFileName("../../Database/Users.txt");
            $this->FileManagerObj->setSeparator("~#~#");
        }

        function Login($ID, $Password)
        {
            $this->FileManagerObj->setFileName("../Database/Users.txt");
            $Myfile = fopen($this->FileManagerObj->getFileName(), "r+") or die("Unable to open file");
            fgets($Myfile);
            while (!feof($Myfile)) 
            {
                $line = fgets($Myfile);
                $Arrayline = explode($this->FileManagerObj->getSeparator(), $line);

                if($ID == $Arrayline[0] && $Password == $Arrayline[3])
                {
                    return true;
                }
            }
            fclose($Myfile);
            return false;
        }

        function CheckSimilarEmail($Email)
        {
            $this->FileManagerObj->setFileName("../Database/Users.txt");
            $Myfile = fopen($this->FileManagerObj->getFileName(), "r+") or die("Unable to open file");
            fgets($Myfile);
            while (!feof($Myfile)) 
            {
                $line = fgets($Myfile);
                $Arrayline = explode($this->FileManagerObj->getSeparator(), $line);

                if($Arrayline[2] == $Email)
                {
                    return true;
                }
            }
            fclose($Myfile);
            return false;
        }

        function AddUser($UserObj)
        {
            $Separator = $this->FileManagerObj->getSeparator();
            $this->setID($this->FileManagerObj->getLastId() + 1);
            $Record = $this->getID(). $Separator. $this->getName(). $Separator.  $this->getEmail(). $Separator. $this->getPassword(). $Separator. $this->getRoleNumber()."\r\n";
            $this->FileManagerObj->StoreRecordinFile($Record);
        }

        function ListAllUsers()
        {
            $Myfile = fopen($this->FileManagerObj->getFileName(), "r+") or die("Unable to open file");
            $Firstrow = 0;
            while (!feof($Myfile))
            {
                $line = fgets($Myfile);

                if ( empty(trim($line))) 
                {
                    break;
                }

                $Arrayline = explode($this->FileManagerObj->getSeparator(), $line);

                echo "<tr>";
                for ($i = 0; $i < count($Arrayline) - $Firstrow; $i++)
                {
                    echo "<td>" . $Arrayline[$i] . "</td>";
                }

                if($Firstrow == 1)
                {
                    $RoleObj = new RolesType();
                    $RoleType = $RoleObj->GetRoleType(trim($Arrayline[count($Arrayline) - 1]));
                    echo "<td>" . $RoleType . "</td>"."<td><input type = checkbox name = SelectedRows[] value =".$Arrayline[0]."></td>"."<td><a href = ../../Views/UserCRUD/UpdateUser.php?Id=".$Arrayline[0].">Update</a></td>";
                }
                echo "</tr>";
                $Firstrow = 1;
            }
            fclose($Myfile);
        }

        function GetUserById($Id)
        {
            $UserObj = new User();
            $line = $this->FileManagerObj->GetLineById($Id);
            $ArrayLine = explode($this->FileManagerObj->getSeparator(), $line);
            $UserObj->setID($ArrayLine[0]);
            $UserObj->setName($ArrayLine[1]);
            $UserObj->setEmail($ArrayLine[2]);
            $UserObj->setPassword($ArrayLine[3]);
            $UserObj->setRoleNumber($ArrayLine[4]);
            return $UserObj;
        }
    }
?>