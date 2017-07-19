<?php 
$dbname = '';
$password = '';
$host = '';
$connection = mysql_connect($dbname,$password,$host);
if($connection){
echo "database successfully connected!";
}else{
echo "Sorry! database not connected.";
}
?>
