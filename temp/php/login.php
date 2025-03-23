<html>
<head>
    <title>Website</title>
    <style>
        h1 {color:red; text-align:center; background-color:gray; font-size:40px;}
        form {color:powderblue; text-align:center; background-color:tomato; font-size:25px;}
    </style>
</head>
<body>
    <h1>Login Page</h1>
    <form method="post">
        Username: <input type="text" name="user"><br><br>
        Password: <input type="password" name="pass"><br><br>
        <input type="submit" name="sb" value="Submit">
    </form>

    <?php
    $con = mysqli_connect('localhost', 'root', '', 'prac2');
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    if (isset($_POST['sb'])) {
        $username = mysqli_real_escape_string($con, $_POST['user']);
        $password = mysqli_real_escape_string($con, $_POST['pass']);
        $query = "INSERT INTO login(username, password) VALUES ('$username', '$password')";
        $execute = mysqli_query($con, $query);
        
        if ($execute) {
            // Correct usage of header function
            header("Location: Registration.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($con);
        }
    }

    mysqli_close($con);
    ?>
</body>
</html>
