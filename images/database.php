<?php



echo "";



$sql = "CREATE TABLE users(
  id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(50) NOT NULL,
  password  VARCHAR(30) NOT NULL


)"; #Table Kuruldu




$servername = "localhost";
$username = "root";
$password = "";
$dbname = "campIO";
  
$conn= new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Not Connected: " . $baglanti->connect_error);
}
else { echo "Connected";}

$conn->close();
?>