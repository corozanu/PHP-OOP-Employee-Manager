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
?>