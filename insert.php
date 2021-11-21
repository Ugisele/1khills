<?php
$servername="localhost";
$username="root";
$password="";
$db="1khills";


// $conn= new PDO("msql:host=$servername;dbname=$db,$username,$password");

// $conn= setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);


$conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



$Name=$_POST['name'];
$E_mail=$_POST['email'];
$Tel=$_POST['phone'];
$guest=$_POST['number-guests'];
$attending_on=$_POST['date'];
$time=$_POST['time'];
$messages=$_POST['message'];




$sql= "INSERT INTO `contact`( `Name`, `E-mail`, `Tel`, `guest`, `attending_on`, `time`, `messages` ) 
VALUES ('$Name','$E_mail',' $Tel',' $guest','$attending_on',' $time',' $messages')";



try{
    $conn->exec($sql);
    echo "post Inserted with success";
    header("Refresh:0; url=1khills.php");
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
    echo "connection successfull"



?>


