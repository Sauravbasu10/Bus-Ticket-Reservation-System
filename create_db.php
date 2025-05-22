<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creating Database</title>
</head>
<body>
   
    <?php
$servername="localhost";
$username="root";
$password="";
$con=mysqli_connect($servername,$username,$password);
    if(! $con)
    {
        die('Could not connect'. mysqli_connect_error());
    }
    echo 'connected successfully<br>';

   	 $sql="CREATE DATABASE busreservation";
        if(mysqli_query($con,$sql)){
            echo "database inventory_ms created successfully";
        }
        else {
            echo "database creation failed". mysqli_error($con);
        }
     mysqli_close($con);
?>

</body>
</html>



