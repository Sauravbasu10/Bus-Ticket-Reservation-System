<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Gateway</title>
    <!-- <link rel="stylesheet" href="harry2.css"> -->
    <style>
  * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.contuner {
  border: 2px solid #ccc;
  width: 50%;
  margin: 20px auto;
  padding: 30px;
  border-radius: 10px;
  background-color: #f9f9f9;
  box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
}

h2 {
  background-color: #333;
  opacity: 0.9;
  height: 80px;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  width: 100%;
  color: gray;
  font-size: 2.5rem;
  font-weight: 500;
  text-transform: uppercase;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
  border-bottom: 2px solid #a93e3e;
  border-radius: 8px;
  box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.3);
}

.mainhead {
  
  width: 100%;
  margin: auto;
  text-align: center;
  margin-top: 20px;
  transition: margin-top 0.3s ease;
  position: relative;
  overflow: hidden;
}

.mainhead:before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: linear-gradient(to bottom, rgba(0,0,0,0.2) 0%, rgba(0,0,0,0) 100%);
  z-index: -1;
  opacity: 0;
  transition: opacity 0.3s ease;
}

.mainhead:hover {
  margin-top: 15px;
  color:white;
}

.mainhead:hover:before {
  opacity: 1;
}


input,
textarea {
  width: 100%;
  height: 40px;
  padding: 10px;
  border-radius: 4px;
  border: 1px solid #ccc;
  font-size: 16px;
  margin-bottom: 20px;
  transition: border-color 0.3s ease;
}

input:focus,
textarea:focus {
  outline: none;
  border-color: #f44336;
  box-shadow: 0px 0px 5px rgba(244, 67, 54, 0.3);
}

textarea#address {
  height: 40px;
}

button {
  background-color: #f44336;
  color: #fff;
  border: none;
  padding: 12px 24px;
  font-size: 16px;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

button:hover {
  background-color: #d32f2f;
}

.error-message {
  color: #f44336;
  font-size: 14px;
  margin-top: 5px;
}

.success-message {
  color: #4caf50;
  font-size: 14px;
  margin-top: 5px;
}



    </style>
</head>

<body>

    <?php
    session_start();
    $_SESSION['no'] = $_POST["num_name"];
    $a = 1;
    while ($a <= $_POST["num_name"]) {
        $_SESSION['pname' . $a] = $_POST['col2_' . $a];
        $_SESSION['pconno' . $a] = $_POST['col3_' . $a];
        $_SESSION['page' . $a] = $_POST['col4_' . $a];
        // print($_POST['col2_' . $a]);
        // print("&emsp;");
        // print($_POST['col3_' . $a]);
        // print("&emsp;");
        // print($_POST['col4_' . $a]);
        $a++;
        // print("<br>");
    }


    $z = $_POST['num_name'];
    $_SESSION["hdcunt"] = $_POST['num_name'];
    $x = $_SESSION['bsnm'];

    $db = mysqli_connect('localhost', 'root', '', 'busreservation') or die("Could not connect to Database");

    $querry = "UPDATE bus_details SET seats_available = seats_available - $z WHERE bus_name = '$x'";
    $result = mysqli_query($db, $querry) or die("Could not execute querry" . mysqli_error($db));


    ?>

    <script>
        function validate() {
            var a, b, c;
            a = document.getElementById("pin_id").value;
            b = document.getElementById("cardNumber_id").value;
            c = document.getElementById("exDate_id").value;
            d = document.getElementById("cvvPass_id").value;
            if (isNaN(a)) {
                alert("Please enter a valid number");
                return false;
            }
            if (isNaN(b)) {
                alert("Please enter a valid number");
                return false;
            }
            if (isNaN(d)) {
                alert("Please enter a valid number");
                return false;
            }

            var currentDate = new Date();
            var day = ("0" + currentDate.getDate()).slice(-2);
            var month = ("0" + (currentDate.getMonth() + 1)).slice(-2);
            var year = currentDate.getFullYear();
            var z = parseInt(year.toString() + month.toString() + day.toString());

            var ne = parseInt(c.replace(/-/g, ''));
            if (ne < z) {
                alert("Please enter a valid card date");
                return false;
            }


        }
    </script>


    <div>
        <h2 class="mainhead"><b><u>Payment Form</u></b></h2>



        <div class="contuner">
            <h3>Contact Information</h3>
            <form action="ticket page.php" autocomplete="off" method="post" onsubmit="return validate()">
                <div>
                    Name: <input type="text" name="myName" required placeholder="type ur name">
                </div>
                <br>
                <div>
                  
                        <legend>Gender:</legend>  
                        <fieldset>
                        MALE<input type="radio" name="myGndr"> FEMALE <input type="radio" name="myGndr" required>
                    </fieldset>
                </div>
                <br>
                <label for="address"> Address </label>
                <div>
                    <textarea name="myText" cols="200" rows="3" id="address"></textarea>
                </div>
                <br>
                <div>
                    Email: <input type="text" name="email_name" id="email_id" required placeholder="kscyubuBk@gmail.com">
                </div>
                <br>
                <div>
                    Pincode: <input type="number" name="pin_name" id="pin_id" required placeholder="111111" minlength="6" maxlength="6">
                </div>
                <br>
                <hr>
                <br>
                <h3>Payment Info</h3>
                <br>
                <div>
                    Card type: <select name="myCard">
                        <option value="">--Enter type of card--</option>
                        <option value="masterCard">Master Card</option>
                        <option value="debitCard">Debit Card</option>
                    </select>
                </div>
                <br>
                <div>
                    Card Number: <input type="number" name="cardNumber_name" id="cardNumber_id" required placeholder="1111-2222-3333-4444" minlength="16" maxlength="16">
                </div>
                <br>
                <div>
                    Expiry Date: <input type="date" name="exDate_nam" id="exDate_id" required>
                </div>
                <br>
                <div>
                    CVV: <input type="password" name="cvvPass_name" id="cvvPass_id" minlength="3" maxlength="3" required placeholder="123">
                </div>
                <br>
                <input type="submit" value="pay Now">
                <br>
                <br>
                <input type="reset" value="Reset">
            </form>
        </div>
    </div>
</body>

</html>