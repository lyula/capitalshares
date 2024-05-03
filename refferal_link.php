<?php
session_start();

include("backend/lib.php");
include("functions.php");

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit();
}

// Retrieve user's referral code
$user_id = $_SESSION['user_id'];
$query = "SELECT refferal_code FROM users WHERE id = '$user_id'";
$referral_code = sqlValue($query);

// Generate referral link
$referral_link = 'https://example.com/register.php?ref=' . $referral_code;

// Echo the referral link
echo $referral_link;
?>
