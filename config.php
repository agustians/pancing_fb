<?php 
define('DBHOST','localhost');
define('DBUSER','u0_a253');
define('DBPASS','');
define('DBNAME','loginfb');
$db = new PDO("mysql:host=".DBHOST.";port=3306;dbname=".DBNAME, DBUSER, DBPASS);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
?>
