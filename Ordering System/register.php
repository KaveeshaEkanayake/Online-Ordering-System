<?php
session_start(); 

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "srimaas_db"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    if (strlen($password) < 8 || !preg_match("/^(?=.*[a-zA-Z])(?=.*\d).+$/", $password)) {
        $_SESSION['message'] = "Password should be at least 8 characters long and contain both letters and numbers.";
        header("Location: ".$_SERVER['PHP_SELF']);
        exit;
    }

    
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    
    $sql = "INSERT INTO user_details (name, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $email, $hashed_password);

    if ($stmt->execute()) {
        $_SESSION['message'] = "Registration successful! Please log in.";
        header("Location: login.php"); 
        exit;
    } else {
        $_SESSION['message'] = "Error: " . $stmt->error;
        header("Location: ".$_SERVER['PHP_SELF']);
        exit;
    }
}


$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php include('components/header.php'); ?>
   <title>Register</title>

   
   <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

body {
    font-family: "Poppins", sans-serif;
    margin: 0;
    padding: 0;
    background-image: url('images/spices background.jpg'); /* Change 'your-background-image.jpg' to your image file */
    background-size: cover;
    background-position: center;
}

.form-container {
    width: 100%;
    max-width: 450px;
    margin: 100px auto;
    padding: 20px;
    background-color: rgba(255, 255, 255, 0.8); /* White with slight transparency */
    border: 3px solid #000; /* Black border */
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
}

.form-container h3 {
    text-align: center;
    margin-bottom: 20px;
    font-size: 30px;
    color: #000; /* Black text */
}

.input-box {
    position: relative;
    margin-bottom: 20px;
}

.input-box input {
    width: 95%;
    padding: 10px;
    border: 1px solid #000; /* Black border */
    border-radius: 5px;
    outline: none;
}

.input-box i {
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translateY(-50%);
}

.btn {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #000; /* Black button */
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    outline: none;
}

.btn:hover {
    background-color: #333; /* Darker shade of black on hover */
}

.login-link {
    text-align: center;
    color: #000; /* Black text */
}

.login-link a {
    color: #000; 
    text-decoration: none;
    font-weight: bold; /* Make the link text bold */
}

.message {
    background-color: #f8d7da;
    color: #000; /* Black text */
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 4px;
}
   </style>

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>Register</h3>
     
      <?php if(isset($_SESSION['message'])): ?>
      <div class="message"><?php echo $_SESSION['message']; ?></div>
      <?php unset($_SESSION['message']); // Unset the session message after displaying ?>
      <?php endif; ?>

   
      <div class="input-box">
      <input type="text" name="username" required placeholder="Enter your username" class="box">
      <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
      <input type="email" name="email" required placeholder="Enter your email" class="box">
      <i class='bx bxs-email'></i>
      </div>
      <div class="input-box">
      <input type="password" name="password" required placeholder="Enter password" class="box">
      <i class='bx bxs-pass'></i>
      </div>
      <div class="input-box">
      <input type="password" name="cpassword" required placeholder="Confirm password" class="box">
      <i class='bx bxs-cpass'></i>
      </div>
      <input type="submit" name="submit" class="btn" value="Register">
      <div class="login-link">
      <p>Already have an account? <a href="login.php">Login now</a></p>
      </div>
   </form>

</div>
<?php include('components/footer.php'); ?>
</body>
</html>
