<?php
    if (isset($_POST['submit'])) {
        include_once 'Database.php';
        $Database = new Database;
        $PDO = $Database->PDO();

        $username = $_POST['username'];
        $firstname = $_POST['firstname'];
        $middlename = $_POST['middlename'];
        $lastname = $_POST['lastname'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $position = $_POST['position'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $salary_type = $_POST['salary_type'];
        $salary = $_POST['salary'];
        
    }
?>