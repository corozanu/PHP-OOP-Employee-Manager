<?php
    class Employee {
        public $first_name;
        public $last_name;
        public $age;
        public $gender;
        public $position;
        public $salary;
        public $status = array();
        public $username;
        protected $password;

        public function __construct($employeeData = array()) {
            
        }
    }
?>