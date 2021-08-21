<?php 
// DB credentials.
define('DB_HOST','tiff1.cvhscff6xewm.eu-west-1.rds.amazonaws.com');
define('DB_USER','tiff1');
define('DB_PASS','tiffinpassword1');
define('DB_NAME','tiffin_db');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
