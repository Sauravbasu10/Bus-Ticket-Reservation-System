<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>

    <style>
* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

h1 {
  background-color: #333;
  opacity: 0.9;
  height: 100px;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  width: 100%;
  color: #fff;
  font-family: Arial, sans-serif;
  font-size: 3rem;
  font-weight: 500;
  text-transform: uppercase;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
  border-bottom: 2px solid #a93e3e;
  margin-bottom: 20px;
  border-radius: 8px;
  box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.3);
  transition: opacity 0.3s ease-in-out;
}

h1:hover {
  opacity: 1;
  box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
}

.firstform {
  padding: 52px;
  width: 685px;
  margin: 100px auto;
  font-size: 20px;
  border: 2px solid #333;
  background-color: rgba(255, 255, 255, 0.7);
}

#src_id,
#to_id,
#date_id {
  padding: 8px;
  font-size: 16px;
  width: 100%;
  margin-bottom: 25px;
  border-radius: 6px;
  border: 2px solid #151515;
}

.submit {
  padding: 8px 16px;
  background-color: #333;
  border: none;
  color: #fff;
  font-size: 16px;
  cursor: pointer;
  border-radius: 5px;
}

.submit:hover {
  background-color: #5d5d5e;
}

.secondform {
  padding: 52px;
  width: 685px;
  margin: auto;
  font-size: 20px;
  border: 2px solid #333;
  background-color: rgba(255, 255, 255, 0.7);
  margin-bottom: 25px;
  position: relative;
  top: -58px;
}

th,
td {
  padding: 6px;
  border: none;
}

.lastbutton {
  margin: auto;
  display: block;
  padding: 11px;
  font-size: 19px;
  background-color: #333;
  border: none;
  color: #fff;
  cursor: pointer;
  border-radius: 5px;
}

.leftcontainer {
  float: left;
  margin: 100px 50px;
  padding: 40px;
  border: 2px solid #333;
  border-radius: 8px;
  width: 500px;
  height: 400px;
  background-color: rgba(255, 255, 255, 0.7);
}

.container1 {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  align-items: stretch;
}

.rightcontainer {
  float: right;
  margin: 80px 50px;
  padding: 40px;
  border: 2px solid #333;
  border-radius: 8px;
  background-color: rgba(255, 255, 255, 0.7);
}

input,
select {
  border-radius: 5px;
  height: 40px;
  text-align: center;
  font-size: 1.2rem;
  margin-bottom: 10px;
}

table {
  width: 100%;
  border: 1px solid #333;
  margin-top: 20px;
}

.sub {
  width: 100px;
  float: right;
  margin: 60px 0 0 0;
}
.bg {
    width: 200vw;
    height: 200vh;
    position: absolute;
    z-index: -1;
    opacity: 0.9;
  }

    </style> 
</head>




<body>
<img class="bg" src="login-background.jpg" alt="bus">
    <center>
        <h1><u><b>Ticket Reservations<b></u></h1>
    </center>


    <form action="" method="post" class="firstform">

        from: <select name="src_name" id="src_id">
            <option value="Bhaktapur">Bhaktapur</option>
            <option value="Pokhara">Pokhara</option>
            <option value="Illam">Illam</option>
            <option value="Kathmandu">Kathmandu</option>
            <option value="Lumbini">Lumbini</option>
            
        </select><br>
        to: <select name="to_name" id="to_id">
            <option value="Pokhara">Pokhara</option>    
            <option value="Chitwan">Chitwan</option>
            <option value="Kathmandu">Kathmandu</option>
            <option value="Dolakha">Dolakha</option>
            <option value="Pokhara">Pokhara</option>
            <option value="Dharan">Dharan</option>
        </select><br><br>
        Date of journey: <input type="date" name="date_name" id="date_id">
        <br><br>
        <?php
        session_start();
        
        ?>

        <input name="submit" type="submit" value="GET DETAILS" class="submit">
        </div>

    </form>



    <br><br>
    <form action="passenger info.php" method="post" class="secondform">
        <?php
        if (isset($_POST['submit'])) {
            $frm = $_POST['src_name'];
            $to = $_POST['to_name'];

            $_SESSION["frm"] = $_POST['src_name'];
            $_SESSION["to"] = $_POST['to_name'];
            $_SESSION["dt"] = $_POST['date_name'];

            $db = mysqli_connect('localhost', 'root', '', 'busreservation') or die("Could not connect to Database");

            $querry = "SELECT * FROM bus_details WHERE source='$frm' AND destination='$to'";


            if ($result = mysqli_query($db, $querry) or die("Could not execute querry")) {
                print('<table style="border: 2px solid blue;">
    <tr>
        <th>BUS NAME</th>
        <th>FARE</th>
        <th>VACANT SEATS</th>
        <th>SELECT</th>
    </tr>');

                while ($row = mysqli_fetch_row($result)) {
                    print('<tr>
        <td>' . $row[0] . '</td>
        <td align="center"><input type="hidden" value="' . $row[3] . '" name="fair_name">' . $row[3] . '</td>
        <td align="center">' . $row[4] . '</td>
        <td align="center"><input type="radio" name="radio_name" value="' . $row[0] . '"></td>
    </tr> ');
                }
                print('</table>');
            }
        }
        ?>
        <br><br>
        <!-- <form action="passenger info.php" method="post"> -->
        <input type="submit" value="Submit" class="lastbutton">
        <!-- </form> -->
    </form>
</body>

</html>