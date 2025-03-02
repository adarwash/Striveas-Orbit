<?php
// Database settings
define('DB1', [
    'type'   => 'sqlsrv',              // Database type: mysql, sqlsrv, pgsql, etc.
    'host'   => '192.168.0.6',           // Hostname or IP address of the database server
    'dbname' => 'AdventureWorks2022',    // Name of the database
    'user'   => 'mvc',                  // Username for the database
    'pass'   => 'password'           // Password for the database
]);

define('DEFAULT_TITLE', 'Welcome to the MVC Framework');
?>