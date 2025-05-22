<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creating product table</title>
</head>
<body>
    <?php
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="busreservation";

        $con=mysqli_connect($servername ,$username ,$password ,$dbname);
        if(! $con){
            die ("connection failed:".mysqli_connect_error());
        }

        $sql="CREATE TABLE `user__details` (
            `name` text NOT NULL,
            `email` varchar(255) NOT NULL ,
            `password` varchar(6) NOT NULL,
            `cont_num` text NOT NULL)"
          ;
        if(mysqli_query($con,$sql)){
            echo "table created successfully";
        }
        else{
            echo "error creating table:".mysqli_error($con);
        }

      
    ?>
</body>
</html>