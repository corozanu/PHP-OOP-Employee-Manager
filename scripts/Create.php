<?php
    require '../config.php';
    require '../objects/Database.php';
    if (isset($_POST['employee-submit'])) {
        $database = new Database(SQLDB, SQLUSER, SQLPASS, SQLHOST, SQLCHAR, SQLOPTIONS);
        $PDO = $database->PDO();

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
            // The regular expression you used here only looks for spaces in the username.
            // Ideally, you want to be checking it to determine whether or not it is alphanumeric, which can be accomplished with:
            // /[a-zA-Z0-9]+/
            // See https://gist.github.com/cferdinandi/6718463
            // Simply insert it into the double quotes before $username.
            header("Location: ../pages/create_page.php?error=username");
            exit();
        } else if (!preg_match("/[a-zA-Z]*/", $firstname) || !preg_match("/[a-zA-Z]*/", $middlename) || !preg_match("/[a-zA-Z]*/", $lastname)) {
            // By adding an asterisk, you essentially allow the user to create a blank username (zero characters or more)
            // Replace it with + to require at least one of the characters [a-zA-Z].
            // This is the same for the rest of them. At your discretion, you may allow the user to keep their middle name blank.
            header("Location: ../pages/create_page.php?error=name");
            exit();
        } else {
            $availablePositions = $PDO->query("SELECT `position` FROM `users`")->fetchAll();
            array_unique($availablePositions);
            if (!in_array($position, $availablePositions)) { // Nothing happens apart from you setting $newPosition. 
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
