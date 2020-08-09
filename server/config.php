<?php
    /* Database credentials. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'try_db');
    define('DB_PORT', '3308');
    
    /* Attempt to connect to MySQL database */
    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME ,DB_PORT);
    
    // Check connection
    if($link === false)
    {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
?>