<!DOCTYPE html>
<html>
    <head>
        <title>PHP-Employee-Manager-OOP</title>
        <link href="scripts/css/main.css" rel="stylesheet" type="text/css">
        <script src="scripts/js/main.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
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
        <div id="login-box" style="display: none">
            <h2>Login</h2>
            <i class="fas fa-times" style="font-size: 15px; color: black;"></i>
            <form method="post" action="scripts/login.php">
                <label for="username">Username/Email: </label>
                <input type="text" name="login-username">
                <label for="password">Password: </label>
                <input type="password" name="login-password">
                <button type="submit" name="login-submit">Submit</button>
            </form>
        </div>
        <div id="dashboard">
            <p id="datetime"></p>
            <div class="dashboard-item">
                <p>Announcements</p>
                <?php 
                    // Add Sort-by system (sort by newest, most important, etc.)
                    // Display Announcements
                ?>
            </div>
        </div>
    </body>
</html>