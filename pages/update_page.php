<?php
    if (isset($_GET['update'])) {
        $update = $_GET['update'];
        $stmt = "SELECT `id` FROM `users` WHERE `email` = $update OR `username` = $update";
    } else {
        header("Location: read_page.php");
        exit();
    }
?>