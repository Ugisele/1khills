<?php
$servername="localhost";
$username="root";
$password="";
$db="1khills";
echo'good';

$conn= new PDO("msql:host=$servername;dbname=1khills,$username,$password");

    $conn= setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
    echo'good';


    $Name=$_POST['Names'];
    $E_mail=$_POST['E-mail'];
    $Tel=$_POST['Tel'];
    $guest=$_POST['guest'];
    $attending_on=$_POST['attending_on'];
    $time=$_POST['time'];
    $messages=$_POST['message'];


    
    
    $sql= "INSERT INTO `contact`( `Name`, `E-mail`, `Tel`, `guest`, `attending_on`, `time`, `messages` ) 
    VALUES ('$Name','$E_mail',' $Tel',' $guest','$attending_on',' $time',' $messages')";



try{
    $conn->exec($sql);
    echo "post Inserted with success";
    header("Refresh:3; url=1khills.php");
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
    echo "connection successfull"



?>


