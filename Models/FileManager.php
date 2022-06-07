<?php
    class FileManager
    {
        private $FileName;
        private $Separator;
               
        public function setFileName($FileName)
        {
            $this->FileName = $FileName;
        }

        public function getFileName()
        {
            return $this->FileName;
        }

        public function setSeparator($Separator)
        {
            $this->Separator = $Separator;
        }

        public function getSeparator()
        {
            return $this->Separator;
        }


        function GetLineById($Id)
        {
            if (!file_exists($this->FileName)) 
            {
                return 0;
            }
            $Myfile = fopen($this->FileName, "r+") or die("Unable to open file!");
            while (!feof($Myfile)) 
            {
                $line = fgets($Myfile);
                $ArrayLine = explode($this->Separator, $line);
                if ($ArrayLine[0] == $Id) 
                {
                    return $line;
                }
            }
            return "Id not found";
        }

        function GetLastId()
        {
            if (!file_exists($this->FileName))
            {
                return 0;
            }
            $Myfile = fopen($this->FileName, "r+") or die("Unable to open file!");
            $LastId = 0;
            fgets($Myfile);
            while (!feof($Myfile))
            {
                $line = fgets($Myfile);
                $ArrayLine = explode($this->Separator, $line);
                if ($ArrayLine[0] != "")
                {
                    $LastId = $ArrayLine[0];
                }
            }
            fclose($Myfile);
            return $LastId;
        }

        function StoreRecordinFile($record)
        {
            $myfile = fopen($this->FileName, "a+");
            fwrite($myfile, $record);
            fclose($myfile);
        }

        function deleteRecord($line)
        {
            $FileContents = file_get_contents($this->FileName);
            $FileContents = str_replace($line,'', $FileContents);
            file_put_contents($this->FileName, $FileContents);
        }

        function DetleteSelectedlines($Id)
        {
            $line = $this->GetLineById($Id);
            $this->deleteRecord($line);
        }

        function UpdateRecord($TargetLine, $LineToAdd)
        {
            $FileContents = file_get_contents($this->FileName);
            $FileContents = str_replace($TargetLine, $LineToAdd, $FileContents);
            file_put_contents($this->FileName, $FileContents);
        }
    }
?>