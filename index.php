<!DOCTYPE html>
<html>
    <head>
        <title>PHP-Employee-Manager-OOP</title>
        <link href="scripts/css/main.css" rel="stylesheet" type="text/css">
        <script src="scripts/js/main.js"></script>
        <!-- Objects -->
        <?php
            include_once 'objects/Database.php';
            include_once 'objects/Employee.php';
        ?>
    </head>
    <body>
        <div id="top">
            <h1>Employee Manager</h1>
            <nav>
                <?php if (!isset($_SESSION) || $_SESSION['logged-in'] == false): ?>
                    <button onclick="login()">Log-in</button>
                <?php elseif ($_SESSION['logged-in'] == true || $_SESSION['admin'] == true): ?>
                    <?php echo isset($_SESSION['firstname']) ? '<p>' . isset($_SESSION['lastname']) ? '' : $_SESSION['lastname'] . ', ' . $_SESSION['firstname'] . '</p>' : '' ; ?>
                    <a href="pages/admin_page.php"><?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'Admin' ; ?></a>
                <?php elseif ($_SESSION['logged-in'] == true || $_SESSION['admin'] == false): ?>
                    <?php echo isset($_SESSION['firstname']) ? '<p>' . isset($_SESSION['lastname']) ? '' : $_SESSION['lastname'] . ', ' . $_SESSION['firstname'] . '</p>' : '' ; ?>
                    <a href="pages/employee_page.php"><?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'Employee' ; ?></a>
                <?php endif; ?>
            </nav>
        </div>
        <div id="dashboard">
            <p id="datetime"></p>
            <div class="dashboard-item">
                <p>Announcements</p>
                <?php 
                    // Display Announcements
                ?>
            </div>
        </div>
    </body>
</html>