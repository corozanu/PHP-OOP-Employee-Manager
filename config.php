<?php
  // Configuration file
  // Fill in your database details here
  
  DEFINE("SQLUSER", "root");
  DEFINE("SQLPASS", "toor");
  DEFINE("SQLHOST", "localhost");
  DEFINE("SQLPORT", 3306);
  DEFINE("SQLCHAR", "utf8mb4");
  DEFINE("SQLOPTIONS", array(
                        PDO::ATTR_PERSISTENT         => true,
                        PDO::ATTR_EMULATE_PREPARES   => false,
                        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                      ));
?>
