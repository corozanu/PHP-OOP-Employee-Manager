<?php
    trait get {
        public function get_property($property) {
            return $this->$property;
        }
    }

    trait set {
        public function set_property($property, $propertyValue) {
            $this->$property = $propertyValue;
        }
    }

    class Employee {
        use get;
        use set;
        public $first_name;
        public $last_name;
        public $age;
        public $gender;
        public $position;
        public $salary;
        public $status = array();
        public $username;
        protected $password;

        public function __construct() {
            
        }
    }
?>