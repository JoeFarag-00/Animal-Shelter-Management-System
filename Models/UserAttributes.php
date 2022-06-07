<?php
    include_once "CommonAttributes.php";

    abstract class UserAttributes extends CommonAttributes
    {
        private $Email;
        private $Password;
        private $RoleNumber;

        public function setEmail($Email)
        {
            $this->Email = $Email;
        }

        public function getEmail()
        {
            return $this->Email;
        }

        public function setPassword($Password)
        {
            $this->Password = $Password;
        }

        public function getPassword()
        {
            return $this->Password;
        }

        public function setRoleNumber($RoleNumber)
        {
            $this->RoleNumber = $RoleNumber;
        }
        
        public function getRoleNumber()
        {
            return $this->RoleNumber;
        }
        abstract protected function Login($ID, $Password);

        abstract function AddUser($UserObj);

        abstract function ListAllUsers();

        abstract function GetUserById($Id);
    }
?>