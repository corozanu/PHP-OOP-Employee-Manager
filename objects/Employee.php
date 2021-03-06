<?php
    trait basic {
        public function get_property($property) {
            if ($property) {
                return $this->$property;
            } else {
                return null;
            }
        }

        public function set_property($property, $propertyValue) {
            if ($property) {
                $this->$property = $propertyValue;
            } else {
                return null;
            }
        }
    }

    class Employee {
        use basic;
        public $first_name;
        public $middle_name;
        public $last_name;
        public $age;
        public $gender;
        public $position;
        public $salary;
        public $salary_type;
        public $status = array();
        public $username;
        public $password;
        public $email;

        /* 
        public function __construct() {
            
        }*/

        public function statusAdd($statusKey, $statusValue) {
            if (in_array($statusKey)) {
                return null;
            } else {
                $status[$statusKey] = $statusValue;
            }
        }

        public function statusUpdate($statusUpdate) {
            if (in_array($statusUpdate, $status)) {
                return null;
            } else {
                $this->$status[/*count($status)*/] = $statusUpdate;
            }
        }

        public function statusRemove($statusRemove) {
            if (in_array($statusRemove, $status)) {
                array_splice($status, array_search($statusRemove, $status), 1);
            } else {
                return null;
            }
        }
    }
?>