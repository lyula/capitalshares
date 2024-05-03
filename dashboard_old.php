<?php
 session_start();

 include("connection.php");
 include("functions.php");
      
  $user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Capital Shares</title>
    <style>
        a{
            text-decoration: none;
        }
    </style>
    <link rel="icon" href="images/WhatsApp Image 2024-03-24 at 22.06.48.jpeg" type="image/x-icon">
</head>
<body>
       <button><a href="logout.php">Logout </a> </button>
       <button><a href="index.php">Homepage </a> </button>
       <br>
       <br>
       <?php
// Get the current hour in 24-hour format
$current_hour = date('G');
// Set the appropriate greeting based on the current hour
if ($current_hour >= 0 && $current_hour < 12) {
    $greeting = "<strong>Good morning</strong>";
} elseif ($current_hour >= 12 && $current_hour < 15) {
    $greeting = "<strong>Good afternoon</strong>";
} else {
    $greeting = "<strong>Good evening</strong>";
}

// Output the greeting along with the username
echo $greeting . ", <strong>" . $user_data['username'] . "</strong>";
       ?> 
<h2> Welcome to Capital Shares. </h1>
</body>
</html>