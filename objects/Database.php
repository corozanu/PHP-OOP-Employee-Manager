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
        
        public function _construct($DSN, $DBname, $DBuser, $DBpass, $DBhost, $DBchar, $DBoptions) {
            $this->DSN = $DSN;
            $this->DBname = $DBName;
            $this->DBuser = $DBUser;
            $this->DBpass = $DBPass;
            $this->DBhost = $DBHost;
            $this->DBchar = $DBchar;
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
                    echo 'error';
                }
            }
        }
    }
?>
