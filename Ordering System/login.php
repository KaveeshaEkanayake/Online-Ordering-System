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
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    $sql = "SELECT * FROM user_details WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        
        $user_data = $result->fetch_assoc();
        $_SESSION['user_id'] = $user_data['id']; 
        header("Location: products.php");
        exit;
    } else {
       
        $_SESSION['message'] = "Invalid email or password. Please try again.";
    }
}


$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <?php include('components/header.php'); ?>
    <title>Login</title>
    
<style>
 body {
            font-family: "Poppins", sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('images/spices background.jpg');
            background-size: cover;
            background-position: center;
        }

        .wrapper {
            width: 100%;
            max-width: 450px;
            margin: 100px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8); 
            border: 3px solid #000; 
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        .wrapper h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 30px;
            color: #000; 
        }

        .input-box {
            position: relative;
            margin-bottom: 20px;
        }

        .input-box input {
            width: 95%;
            padding: 10px;
            border: 1px solid #000;
            border-radius: 5px;
            outline: none;
        }

        .input-box i {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
        }

        .remember-forgot {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .remember-forgot label {
            font-size: 14px;
            color: #000; 
        }

        .remember-forgot a {
            color: #000;
            text-decoration: none;
        }

        .btn {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #000; /
            color: white; 
            font-size: 16px;
            cursor: pointer;
            outline: none;
        }

        .register-link {
            text-align: center;
            color: #000; 
        }

        .register-link a {
            color: black; 
            text-decoration: none;
            font-weight: bold; 
        }

        .message {
            background-color: #fff;
            color: #ffb411; 
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 4px;
        }
</style>
</head>
<body>
   
<div class="wrapper">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
          <h1>Login</h1>
              
      <?php if(isset($_SESSION['message'])): ?>
      <div class="message"><?php echo $_SESSION['message']; ?></div>
      <?php unset($_SESSION['message']);  ?>
      <?php endif; ?>

   
          <div class="input-box">
            <input type="text" name="email" id="email" placeholder="Email" required>
            <i class='bx bxs-user'></i>
          </div>
          <div class="input-box">
            <input type="password" name="password" placeholder="Password" required>
            <i class='bx bxs-lock-alt' ></i>
          </div>
          <div class="remember-forgot">
            <label><input type="checkbox">Remember Me</label>
            <a href="#">Forgot Password</a>
          </div>
          <button type="submit" name="login" class="btn" id="btn">Login</button>
          <div class="register-link">
            <p>Don't have an account? <a href="register.php">Register</a></p>
          </div>
        </form>
      </div>
      <script>
         document.querySelector("#btn").addEventListener('click', function() {
        var username = document.querySelector("#email").value; 
        alert('Hello, ' + username + '!');
    });
      </script>
      <?php include('components/footer.php'); ?>
</body>
</html>

