<?php
    if (isset($_POST['login-submit'])) {
        $Database = new Database;
        $PDO = $Database->PDO();
        $usernameInput = $_POST['login-username'];
        $password = $_POST['login-password'];

        // error handlers
        if (empty($usernameInput) || empty($password)) {
            header("Location: ../index.php?login=empty");
            exit();
        } else {
            if (filter_var($usernameInput, FILTER_VALIDATE_EMAIL)) {
                try {
                    $stmt = "SELECT * FROM `users` WHERE `email`=?";
                    if (!$PDO->prepare($stmt)->execute([$usernameInput])) {
                        throw new Exception;
                    }
                } catch (Exception $e) {
                    header("Location: ../index.php?login=error");
                    exit();
                }
                if ($stmt->rowCount() == 0) {
                    header("Location: ../index.php?login=invalid");
                    exit();
                } else if ($stmt->rowCount() > 0) {
                    try {
                        $stmt = "SELECT `password` FROM `users` WHERE `email`=?";
                        if (!$PDO->prepare($stmt)->execute([$usernameInput])) {
                            throw new Exception;
                        }
                    } catch (Exception $e) {
                        header("Location: ../index.php?login=error");
                        exit();
                    }
                    $row = $stmt->fetch();
                    if (password_verify($password, $row) == false) {
                        header("Location: ../index.php?login=invalid");
                        exit();
                    } else if (password_verify($password, $row) == true) {
                        $stmt = $PDO->query("SELECT * FROM `users` WHERE `email`=$usernameInput AND `password`=$password");
                        $row = $stmt->fetch();
                        $_SESSION['username'] = $row['username'];
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['first_name'] = $row['first_name'];
                        $_SESSION['last_name'] = $row['last_name'];
                        $_SESSION['admin'] = $row['admin'];
                        // continue on for each database column.
                        header("Location: ../index.php?login=success");
                        exit();
                    }
                }
            } else if (!filter_var($usernameInput, FILTER_VALIDATE_EMAIL)) {
                try {
                    $stmt = "SELECT * FROM `users` WHERE `username`=?";
                    if (!$PDO->prepare($stmt)->execute([$usernameInput])) {
                        throw new Exception;
                    }
                } catch (Exception $e) {
                    header("Location: ../index.php?login=error");
                    exit();
                }
                if ($stmt->rowCount() == 0) {
                    header("Location: ../index.php?login=invalid");
                    exit();
                } else if ($stmt->rowCount() > 0) {
                    try {
                        $stmt = "SELECT `password` FROM `users` WHERE `username`=?";
                        if (!$PDO->prepare($stmt)->execute([$usernameInput])) {
                            throw new Exception;
                        }
                    } catch (Exception $e) {
                        header("Location: ../index.php?login=error");
                        exit();
                    }
                    $row = $stmt->fetch();
                    if (password_verify($password, $row) == false) {
                        header("Location: ../index.php?login=invalid");
                        exit();
                    } else if (password_verify($password, $row) == true) {
                        $stmt = $PDO->query("SELECT * FROM `users` WHERE `username`=$usernameInput AND `password`=$password");
                        $row = $stmt->fetch();
                        $_SESSION['username'] = $row['username'];
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['first_name'] = $row['first_name'];
                        $_SESSION['last_name'] = $row['last_name'];
                        $_SESSION['admin'] = $row['admin'];
                        // continue on for each database column.
                        header("Location: ../index.php?login=success");
                        exit();
                    }
                }
            }
        }
    }
?>