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

        $sql="
        INSERT INTO `user__details` (`name`, `email`, `password`, `cont_num`) VALUES
        ('Basu', 'basukalasaurav@gmail.com', '987651', '9860171758')     
        ";
        $result=mysqli_query($con,$sql);
    if($result)
    {
        echo "data inserted successfully";
    }
    else
    {
        die(mysqli_error());
    }
        
        mysqli_close($con);
    ?>
</body>
</html>