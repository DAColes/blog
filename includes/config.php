<?php
ob_start(); //output buffering, headers can then be used anywhere
session_start(); //start sessions, will be needed for the admin area

//database credentials
define('DBHOST','localhost');
define('DBUSER', 'dcoles');
define('DBPASS', 'Successful2017!');
define('DBNAME', 'mysimpleblog');

//define database connection details
$db = new PDO("mysql:host=".DBHOST.";port=8889;dbname=".DBNAME, DBUSER, DBPASS);
//open PDO connection
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//set timezone
date_default_timezone_set('America/New_York');

//load classes as needed, no need to manually include all classes
/*function __autoload($class) {

    //name of class converted to lower case
    $class = strtolower($class);

    //check to see if file exists and if it does then it is included
    $classpath ='classes/class.'.$class . '.php';
    if ( file_exists($classpath)){
        require_once $classpath;
    }

    $classpath = '../classes/class.'.$class . '.php';
    if ( file_exists($classpath)){
        require_once $classpath;
    }

    $classpath = '../../classes/class.'.$class . '.php';
    if ( file_exists($classpath)) {
      require_once $classpath;
    }
}

//user class is instantiated and passed to the database connection so the class has access to the database.
$user = new User($db);*/
?>
