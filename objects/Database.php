<?php
    class Database {
        protected $DBname;
        protected $DBuser;
        protected $DBpass;
        protected $DBhost;
        protected $DBchar;
        protected $DBoptions;
        protected $DSN;
        public $PDO;
        
        public function _construct() {
            $this->$DSN = "mysql:host=$DBhost;DBname=$DBname;charset=$DBchar";
            $this->$DBname = 'PHP-Employee-Manager-O';
            $this->$DBuser = 'root';
            $this->$DBpass = '';
            $this->$DBhost = 'localhost:8080';
            $this->$DBchar = 'utf8mb4';
            $this->DBoptions = array(
                PDO::ATTR_PERSISTENT         => true,
                PDO::ATTR_EMULATE_PREPARES   => false,
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ); 
        }

        public function PDO() {
            if ($this->$PDO) {
                return $this->$PDO;
            } else {
                try {
                    $this->$PDO = new PDO($DSN, $DBuser, $DBpass, $options);
                } catch (PDOException $error) {
                    return null;
                    echo 'error';
                }
            }
        }
    }
?>