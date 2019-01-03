<?php
    if (isset($_POST['employee-submit'])) {
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
        
        // Error Handlers

        if (preg_match("/\s+/", $username)) {
            header("Location: ../pages/create_page.php?error=username");
            exit();
        } else if (!preg_match("/[a-zA-Z]*/", $firstname) || !preg_match("/[a-zA-Z]*/", $middlename) || !preg_match("/[a-zA-Z]*/", $lastname)) {
            header("Location: ../pages/create_page.php?error=name");
            exit();
        } else {
            $availablePositions = $PDO->query("SELECT `position` FROM `users`")->fetchAll();
            array_unique($availablePositions);
            if (!in_array($position, $availablePositions)) {
                $newPosition = true;
            } else {
                $newPosition = false;
            }
            
        }
    } else {
        header("Location: ../pages/create_page.php");
        exit();
    }
?>