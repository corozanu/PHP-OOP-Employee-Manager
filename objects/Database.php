<?php
    class Database {
        private $DBname;
        private $DBuser;
        private $DBpass;
        private $DBhost;
        private $DBchar;
        private $DBoptions;
        private $DSN;
        private $PDO;
        
        public function _construct($DBName, $DBuser, $DBpass, $DBhost, $DBchar, $DBoptions) {
            $this->DSN = "mysql:host=$DBhost;DBname=$DBname;charset=$DBchar";
            $this->DBuser = $DBName;
            $this->DBpass = $DBName;
            $this->DBhost = $DBName;
            $this->DBchar = $DBName;
            $this->DBoptions = $DBoptions;
        }

        public function PDO() {
            if ($this->PDO) {
                return $this->PDO;
            } else {
                try {
                    $this->PDO = new PDO($this->DSN, $this->DBuser, $this->DBpass, $this->options);
                } catch (PDOException $error) {
                    return null;
                }
            }
        }
    }
?>
