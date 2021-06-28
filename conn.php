<?php
$servername = "localhost"; 
$username = "username"; 
$password = "password";
$dbname = "datab_arm";         


$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error)
{
    echo "توجد مشكلة في الاتصال: " . $conn->connect_error;
}
else
{
echo "تم الاتصال بنجاح";
}


?>