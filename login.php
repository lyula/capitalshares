<?php
session_start();
include("backend/lib.php");
include("functions.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN TO CAPITAL SHARES</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="icon" href="images/WhatsApp Image 2024-03-24 at 22.06.48.jpeg" type="image/x-icon">
</head>
<body>
<body style="background-color: #f0f0f0;">
<style>
    body {
        background-color: #a2d2ff; /* Changed the background color of the whole page */
    }
    .center-form {
        margin: auto;
        width: 50%;
        padding: 10px;
        text-align: center; /* Centered the form */
    }
    a{
        text-decoration: none;
        color: blue;
    }
    a:hover{
        color:red;
    }
</style>
<style>
    input[type=submit] {
        background-color: #007bff; /* Blue background color */
        color: white; /* White text color */
        border: none; /* No border */
        cursor: pointer; /* Pointer cursor on hover */
    }
    input[type=submit]:hover {
        background-color: #0056b3; /* Darker blue on hover */
    }
</style>


    <div style="border: 1px solid #ccc; padding: 20px; border-radius: 5px; width: 300px; margin: auto; margin-top: 100px;">
        <form action="login.php" method="post">
            <h2>Login</h2>
            <label for="ID_Number">ID Number:</label><br>
            <input type="text" id="ID_Number" name="id_number" placeholder="Enter your ID Number" required style="width: 90%; padding: 10px; margin-bottom: 10px; border-radius: 5px;"><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" placeholder="Enter your password" required style="width: 90%; padding: 10px; margin-bottom: 10px; border-radius: 5px;"><br>
            <a href="dashboard.php"><input type="submit" value="Login" style="width: 100%; padding: 10px; border-radius: 5px;"></a><br>
            <p>Don't have an account? <a href="register.php">Register here</a></p>
            <div style="text-align: left; margin-top: 20px;">
        <p>Forgot your password? <a href="reset_password.php">Click here to reset it</a></p>
    </div>
        </form>
    </div>
</div>
</body>
</html>
<?php 
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Something was posted
    $id_number = $_POST['id_number'];
    $password = $_POST['password'];

    if (!empty($id_number) && !empty($password)) {
        // Read from database
        $query = "SELECT COUNT(*) FROM users WHERE id_number = '$id_number' LIMIT 1";
        $result = sqlValue($query);

        if($result > 0) {
            $user_data = sql("SELECT * FROM users WHERE id_number = '$id_number' LIMIT 1",$eo);
            $data=[];
            foreach ($user_data as $key => $value) {
                $data['user_id'] = $value['id'];
                $data['password'] = $value['password'];
            }
            // Verify password
            if (password_verify($password, $data['password'])) {
                $_SESSION['user_id'] = $data['user_id'];
                header("Location: dashboard.php");
                die;
            }
        }
       
        echo "<script>Swal.fire({
            title: 'Error!',
            text: 'ID Number or password does not match your Capital Shares credentials! $encode',
            icon: 'error',
            confirmButtonText: 'Cool'
          })</script>";
    } else {
        echo "<script>Swal.fire({
            title: 'Error!',
            text: 'Please enter both ID Number and password',
            icon: 'error',
            confirmButtonText: 'Cool'
          })</script>";
    }
}
?>