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
    <title>REGISTER TO CAPITAL SHARES</title>
    <link rel="icon" href="images/WhatsApp Image 2024-03-24 at 22.06.48.jpeg" type="image/x-icon">
    <!-- sweetalert2 cdn -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body style="background-color: #f0f0f0;">

<style>
    body {
        background-color: #a2d2ff; /* Changed the background color of the whole page */
    }
    .center-form {
        margin: auto;
        width: 90%; /* Adjusted for better mobile view */
        max-width: 400px; /* Maximum width for larger screens */
        padding: 10px;
        text-align: center; /* Centered the form */
        border-radius: 13px;
        box-sizing: border-box; /* Ensures padding is included in width */
    }
</style>
<style>
    input[type=submit] {
        background-color: #007bff; /* Blue background color */
        color: white; /* White text color */
        border: none; /* No border */
        cursor: pointer; /* Pointer cursor on hover */
        padding: 10px; /* Added padding for better touch interaction */
        width: 100%; /* Full width for better mobile interaction */
        box-sizing: border-box; /* Ensures padding is included in width */
    }
    input[type=submit]:hover {
        background-color: #0056b3; /* Darker blue on hover */
    }
    a{
        text-decoration: none;
        color: blue;
    }
    a:hover{
        color:red;
    }
</style>


<div class="center-form">
   

    <div style="border: 1px solid #ccc; padding: 5px; padding-top:15px ; border-radius: 5px; width: 300px;height:570px; margin: auto; margin-bottom: 10px; margin-top: 15px; display:flex;flex-direction:column;justify-content:center;align-items:center;">
    <form action="" method="post">
    <h2>Register</h2>
    <label for="First_Name">First Name:</label><br>
    <input type="text" id="First_Name" name="First_Name" placeholder="Enter your First Name" required style="width: 90%; padding: 10px; margin-bottom: 10px; border-radius: 5px;"><br>
    <label for="Last_Name">Last Name:</label><br>
    <input type="text" id="Last_Name" name="Last_Name" placeholder="Enter your Last Name" required style="width: 90%; padding: 10px; margin-bottom: 10px; border-radius: 5px;"><br>
    <label for="ID_Number">ID Number:</label><br>
    <input type="text" id="ID_Number" name="id_number" placeholder="Enter your National ID Number" required style="width: 90%; padding: 10px; margin-bottom: 10px; border-radius: 5px;" minlength="7" maxlength="8"><br>
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username" placeholder="Choose a username" required style="width: 90%; padding: 10px; margin-bottom: 10px; border-radius: 5px;"><br>
    <label for="reg_email">Email:</label><br>
    <input type="email" id="reg_email" name="email" placeholder="Enter your email" required style="width: 90%; padding: 10px; margin-bottom: 10px; border-radius: 5px;"><br>
    <label for="reg_password">Password:</label><br>
    <input type="password" id="reg_password" name="password" placeholder="Create a password" required style="width: 90%; padding: 10px; margin-bottom: 10px; border-radius: 5px;"><br>
    <input type="submit" value="Register" style="width: 100%; padding: 10px; border-radius: 5px;"><br>
    <p>Already have an account? <a href="login.php">Login here</a></p>
    <label style="display: inline-block; margin-right: 90px; margin-bottom:20px">
        <input type="checkbox" id="termsncs" name="termsncs" required >
        I agree  <a href="termsnc.php"> Terms & Conditions </a>
    </label>
</form>

    </div>
    
</div>

</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Retrieve form data
    $first_Name = $_POST['First_Name'];
    $last_Name = $_POST['Last_Name'];
    $id_number = $_POST['id_number'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if email already exists
    $email_check_query = "SELECT COUNT(*) FROM users WHERE email = '$email' LIMIT 1";
    $result = sqlValue($email_check_query);
    if ($result > 0) {
        // Email already exists
        echo "<script>Swal.fire({
            title: 'Error!',
            text: 'An account with this email already exists. Please use a different email address.',
            icon: 'error',
            confirmButtonText: 'Cool'
          })</script>";
    } else {
        // Email doesn't exist, proceed with registration
        if (!empty($first_Name) && !empty($last_Name) && !empty($id_number) && !empty($username) && !empty($email) && !empty($password) && !is_numeric($username)) {
            // Hash the password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Save user to database
            $refferal_code = time() . rand(10000, 99999);
            $date=date("Y-m-d");
            $reffered_by=(isset($_GET['ref']) ? $_GET['ref'] : '');
            $query = "INSERT INTO users (first_Name, last_Name, id_number, username, email, password , date_joined , refferal_code , reffered_by) VALUES ('$first_Name', '$last_Name', '$id_number', '$username', '$email', '$hashed_password', '$date' , '$refferal_code' , '$reffered_by')";
            sql($query,$eo);
            $user_id = db_insert_id(db_link());
            //inser into wallets:user_id,wallet type, available balance
            $query1 = "INSERT INTO wallets (user_id, wallet_type, available_amount) VALUES ('$user_id', 'Wallet', '0.00')";
            sql($query1,$eo);
             //Trading Wallet
            $query2 = "INSERT INTO wallets (user_id, wallet_type, available_amount) VALUES ('$user_id', 'Trading Wallet', '0.00')";
            sql($query2,$eo);
             
           // Sweet Alert for successful registration
        echo "<script>
            Swal.fire({
                title: 'Welcome to Capital Shares!',
                text: 'Thank you for registering.You are now a member of Capital Shares.',
                icon: 'success',
                confirmButtonText: 'Proceed'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = 'login.php';
                }
            });
        </script>";
        die;
            
        } else {
            echo "<script>Swal.fire({
                title: 'Error!',
                text: 'Please enter all valid information!',
                icon: 'error',
                confirmButtonText: 'Cool'
              })</script>";
        }
    }
}
?>
