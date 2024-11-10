<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فرم ورود</title>
</head>
<body>
    <h2>فرم ورود</h2>
    <form action="login.php" method="POST">
        <label for="username">نام کاربری:</label><br>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">رمز عبور:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="ورود">
    </form>
</body>
</html>

<?php
/*
Template Name: ورود
*/

$servername = "localhost";
$username = "root";  
$password = "";      
$dbname = "erfan";  

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("اتصال به دیتابیس برقرار نشد: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];


    $user = $conn->real_escape_string($user);
    $pass = $conn->real_escape_string($pass);


    $sql = "SELECT password FROM pahlevan WHERE username='$user'";
    $result = $conn->query($sql);
    //echo $result->num_rows;
    if ($result->num_rows > 0) {
        
        $row = $result->fetch_assoc();
        $hashed_password = $row['password'];

        
        if (password_verify($pass, $hashed_password)) {
            
            echo "ورود موفقیت آمیز بود!";
            
            // header("Location: dashboard.php"); // ???? ????

        } else {
            
            echo "رمز عبور اشتباه است.";
        }
    } else {
        
        echo "نام کاربری اشتباه است.";
    }
}


$conn->close();
?>

