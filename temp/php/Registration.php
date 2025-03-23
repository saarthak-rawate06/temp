<html>
<head>
<title>Website</title>
<style>
h1 {color:red;text-align:center;background-color:gray;font-size:40px;}
form {color:powderblue;text-align:center;background-color:tomato;font-size:25px;}
</style>
</head>
<body>
<h1>Registration Page</h1>
<form method="post" >
  First Name: <input type="text" name="fname"><br>
  Last Name: <input type="text" name="sname"><br>
  Email:<input type="text" name="mail"><br>
  Phone no.: <input type="text" name="phone"><br>
  Address: <input type="text" name="addr"><br>
  Date of Birth: <input type="text" name="dob"><br>
  Submit: <input type="submit" name="sb">
</form>
<?php
  $con = mysqli_connect('localhost','root','','prac2');
  if(!$con) {
        die("Connection failed: ".mysqli_connect_error());
  }
  if(isset($_POST['sb']))
  {
    $fname = $_POST['fname'];
    $sname = $_POST['sname'];
    $mail = $_POST['mail'];
    $phone = $_POST['phone'];
    $addr = $_POST['addr'];
    $dob = $_POST['dob'];
    $query = "INSERT INTO regi(fname, sname, email, phone, addr, dob) VALUES ('$fname', '$sname', '$mail', '$phone', '$addr', '$dob')";
    $execute = mysqli_query($con,$query);
  }
?>
</body>
</html>
