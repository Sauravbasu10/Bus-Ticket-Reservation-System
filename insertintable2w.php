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

        $sql="INSERT INTO bus_details (`bus_name`, `source`, `destination`, `fare`, `seats_available`) VALUES
        ('Bhaktapur-Pokhara 8:00am Volvo Non-AC', 'Bhaktapur', 'Pokhara', 660, 60),
        ('Pokhara-Chitwan 6:30am Volvo Non-AC', 'Pokhara', 'Chitwan', 650, 47),
        ('Illam-Kathmandu 6:45am Volvo Non-AC', 'Illam', 'Kathmandu', 650, 38),
        ('Kathmandu-Dolakha 7:00am volvo AC ', 'Kathmandu', 'Dolakha', 700, 50),
        ('Lumbini-Pokhara 7:00am volvo non AC ', 'Lumbini', 'Pokhara', 600, 50)";
          
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