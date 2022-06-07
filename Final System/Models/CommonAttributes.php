<?php
    abstract class CommonAttributes
    {
        private $ID;
        private $Name;

        public function setID($ID)
        {
            $this->ID = $ID;
        }

        public function getID()
        {
            return $this->ID;
        }

        public function setName($Name)
        {
            $this->Name = $Name;
        }

        public function getName()
        {
            return $this->Name;
        }
    }
?>