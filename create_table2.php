
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

    $sql1="CREATE TABLE bus_details (
        `bus_name` text NOT NULL,
        `source` text NOT NULL,
        `destination` text NOT NULL,
        `fare` int(50) NOT NULL,
        `seats_available` int(10) NOT NULL
      )";
        if(mysqli_query($con,$sql1)){
            echo "table created successfully";
        }
        else{
            echo "error creating table:".mysqli_error($con);
        }
        mysqli_close($con);
      
    ?>
</body>
</html>