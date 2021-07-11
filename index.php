<?php

//Namespace of this file is index that will hold the basics of the program.
namespace index;

//We need to call autoloader to just use any classes we would use.
//We used require_once to throw any errors if some arises.
require_once "./config/autoloader.inc.php";

//Now we will use the database class and make alias of sql_connect.
use \config\DbConnect AS sql_connect; 

//Instantiate and call the connect function.
$sql = new sql_connect();
$db = $sql->connect();

//print $db ? "OK" : "NO";

?>