<?php
// Assuming you have collected the information in PHP variables
$passengerName = $_POST['psg_name'];
$contactNumber = $_POST['cont_number'];
$age = $_POST['age'];
$address = $_POST['address'];
$busName = $_POST['bus_name'];
$date = $_POST['date_name'];


$db=mysqli_connect('localhost','root','','busreservation') or die("Could not connect to Database");

$querry = "INSERT INTO passenger_details Values('$passengerName', '$age','$cont_number', '$address', $busName','$date') ";
    
if(mysqli_query($db, $querry))
{
echo "successful";
} 
else
{die("Could not execute querry");
}
?>