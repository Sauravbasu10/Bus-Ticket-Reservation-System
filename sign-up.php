<?php
$name = $_POST["usrnam_name"];
$email = $_POST["mail_name"];
$number = $_POST["contct_name"];
$pswrd = $_POST["pass_name"];
$cpswrd = $_POST["cpass_name"];

// echo($name);
// echo($number);
// echo($pswrd);
// echo($cpswrd);


$db=mysqli_connect('localhost','root','','busreservation') or die("Could not connect to Database");

$querry = "INSERT into user__details VALUES('$name', '$email', '$pswrd', '$number')";
if(mysqli_query($db, $querry))
{
echo "successful";
} 
else
{die("Could not execute querry");
}
// echo("<font color= 'green' size= '5'>Data inserted Successfully</font>");

header('location: login_page.html');
?>
