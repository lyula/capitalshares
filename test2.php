<?php
session_start();

include("backend/lib.php");
include("functions.php");

$user_data = check_login();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.dashboardpack.com/admindek-html/default/dashboard-crm.ph by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Apr 2024 18:23:09 GMT -->

<head>
    <title>Capital Shares Dashboard</title>


    <!--[if lt IE 10]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 5 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="colorlib" />



    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="files/bower_components/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="files/assets//pages/waves/css/waves.min.css" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="files/assets//icon/feather/css/feather.css">

    <link rel="stylesheet" type="text/css" href="files/assets//css/font-awesome-n.min.css">

    <link rel="stylesheet" href="files/bower_components/chartist/css/chartist.css" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="files/assets//css/style.css">
    <link rel="stylesheet" type="text/css" href="files/assets//css/widget.css">
    <link rel="icon" href="images/WhatsApp Image 2024-03-24 at 22.06.48.jpeg" type="image/x-icon">
</head>

<body>

    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a href="dashboard.php">
                            <img class="img-fluid" src="files/assets/images/capital.jpeg" alt="Theme-Logo" style="height: 50px; width: 50px; border-radius: 50%;" />
                        </a>
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu icon-toggle-right"></i>
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">

                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">

                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-bs-toggle="dropdown">


                                    </div>
                                    <ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">

                                        <li>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0">
                                                    <img class="img-radius" src="files/assets//images/avatar-4.jpg" alt="Generic placeholder image">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h5 class="notification-user"><?php echo $user_data['username'] . "</strong>";
                                                                                    ?> </h5>
                                                    <p class="notification-msg">Welcome to your Capital Shares dashboard.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0">
                                                    <img class="img-radius" src="files/assets//images/avatar-3.jpg" alt="Generic placeholder image">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h5 class="notification-user">Joseph William</h5>
                                                    <p class="notification-msg">Welcome to your Capital Shares dashboard.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0">
                                                    <img class="img-radius" src="files/assets//images/avatar-4.jpg" alt="Generic placeholder image">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h5 class="notification-user">Sara Soudein</h5>
                                                    <p class="notification-msg">Welcome to your Capital Shares dashboard.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="displayChatbox dropdown-toggle" data-bs-toggle="dropdown">

                                    </div>
                                </div>
                            </li>
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-bs-toggle="dropdown">
                                        <img src="files/assets/images/capital.jpeg" class="img-radius" alt="Company-Profile-Image" style="width: 50px;height: 50px;">
                                        <span> <?php echo $user_data['username'] . "</strong>";
                                                ?> </span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                       
                                        <li>
                                            <a href="login.php">
                                                <i class="feather icon-log-out"></i> Logout
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div id="sidebar" class="users p-chat-user showChat">
                <div class="had-container">
                    <div class="p-fixed users-main">
                        <div class="user-box">
                            <div class="chat-search-box">
                                <a class="back_friendlist">
                                    <i class="feather icon-x"></i>
                                </a>
                                <div class="right-icon-control">
                                    <div class="input-group input-group-button">
                                        <input type="text" id="search-friends" name="footer-email" class="form-control" placeholder="Search Friend">
                                        <button class="btn btn-primary waves-effect waves-light" type="button">
                                            <i class="feather icon-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="main-friend-list">
                                <div class="media userlist-box waves-effect waves-light" data-id="1" data-status="online" data-username="Josephin Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius img-radius" src="files/assets//images/avatar-3.jpg" alt="Generic placeholder image ">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="chat-header">Josephin Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box waves-effect waves-light" data-id="2" data-status="online" data-username="Lary Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="files/assets//images/avatar-2.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Lary Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box waves-effect waves-light" data-id="3" data-status="online" data-username="Alice">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="files/assets//images/avatar-4.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alice</div>
                                    </div>
                                </div>
                                <div class="media userlist-box waves-effect waves-light" data-id="4" data-status="offline" data-username="Alia">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="files/assets//images/avatar-3.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-default"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alia<small class="d-block text-muted">10 min ago</small></div>
                                    </div>
                                </div>
                                <div class="media userlist-box waves-effect waves-light" data-id="5" data-status="offline" data-username="Suzen">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="files/assets//images/avatar-2.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-default"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Suzen<small class="d-block text-muted">15 min ago</small></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="showChat_inner">
                <div class="d-flex chat-inner-header">
                    <a class="back_chatBox">
                        <i class="feather icon-x"></i> Josephin Doe
                    </a>
                </div>
                <div class="main-friend-chat">
                    <div class="d-flex chat-messages">
                        <a class="media-left photo-table" href="#!">
                            <div class="flex-shrink-0">
                                <img class="media-object img-radius img-radius m-t-5" src="files/assets//images/avatar-2.jpg" alt="Generic placeholder image">
                            </div>
                        </a>
                        <div class="flex-grow-1 chat-menu-content">
                            <div class>
                                <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                            </div>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                    <div class="d-flex chat-messages">
                        <div class="flex-grow-1 chat-menu-reply">
                            <div class>
                                <p class="chat-cont">Ohh! very nice</p>
                            </div>
                            <p class="chat-time">8:22 a.m.</p>
                        </div>
                    </div>
                    <div class="d-flex chat-messages">
                        <a class="media-left photo-table" href="#!">
                            <div class="flex-shrink-0">
                                <img class="media-object img-radius img-radius m-t-5" src="files/assets//images/avatar-2.jpg" alt="Generic placeholder image">
                            </div>
                        </a>
                        <div class="media-body chat-menu-content">
                            <div class>
                                <p class="chat-cont">can you come with me?</p>
                            </div>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                </div>
                <div class="chat-reply-box">
                    <div class="right-icon-control">
                        <div class="input-group input-group-button">
                            <input type="text" class="form-control" placeholder="Write hear . . ">
                            <button class="btn btn-primary waves-effect waves-light" type="button">
                                <i class="feather icon-message-circle"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    <nav class="pcoded-navbar">
                        <div class="nav-list">
                            <div class="pcoded-inner-navbar main-menu">
                                
<div class="pcoded-navigation-label">Navigation</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="pcoded-hasmenu active pcoded-trigger">
                                        <a href="dashboard.php" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                            <span class="pcoded-mtext">Dashboard</span>
                                        </a>






                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                            <span class="pcoded-mtext">MY DEPOSITS</span>

                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" pcoded-hasmenu">
                                                <a href="deposits.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Deposits</span>
                                                </a>
                                        </ul>
                                    </li>

                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                            <span class="pcoded-mtext">MY WITHDRAWALS</span>

                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" pcoded-hasmenu">
                                                <a href="withdrawals.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Withdrawals</span>
                                                </a>
                                        </ul>
                                    </li>


                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                            <span class="pcoded-mtext">MY INVESTMENTS</span>

                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" pcoded-hasmenu">
                                                <a href="my_investments.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Investments</span>
                                                </a>
                                        </ul>
                                    </li>


                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                            <span class="pcoded-mtext">MY AFFILIATES</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" pcoded-hasmenu">
                                                <a href="my_affiliates.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Affiliates</span>
                                                </a>
                                        </ul>
                                    </li>

                                </ul>
                                </li>
                                </ul>
                            </div>
                        </div>
                    </nav>

                    <div class="pcoded-content">

                        <div class="page-header card">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="feather icon-home bg-c-blue"></i>
                                        <div class="d-inline">
                                            <h5>Dashboard</h5>
                                            <span><?php
                                                    // Get the current hour in 24-hour format
                                                    //change timezone
                                                    date_default_timezone_set('Africa/Nairobi');
                                                    $current_hour = date('G');
                                                    // Set the appropriate greeting based on the current hour
                                                    if ($current_hour >= 0 && $current_hour < 12) {
                                                        $greeting = "Good morning";
                                                    } elseif ($current_hour >= 12 && $current_hour < 15) {
                                                        $greeting = "Good afternoon";
                                                    } else {
                                                        $greeting = "Good evening";
                                                    }

                                                    // Output the greeting along with the username
                                                    echo $greeting . ", " . $user_data['username'] . "</strong>" . "!" . " Welcome to Capital Shares.";
                                                    ?> <br></span>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">

                                        <div class="row">

                                            <div class="col-xl-3 col-md-6">
                                                <div class="card prod-p-card card-red">
                                                    <div class="card-body">
                                                        <div class="row align-items-center m-b-30">
                                                        <?php include('my_deposits_wallet.php')?>
                                                   <!-- deposit button begin -->
                                                            <div class="col-auto">
                                                             <!-- Button to open the modal -->
<!-- Button to open the modal -->
<!-- Button to open the modal -->
<button style="background-color: white; border: none; color: black; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer;border-radius: 4px" id="depositBtn">Deposit</button>

<!-- The Modal -->
<div id="depositModal" style="display: none; position: fixed; z-index: 1000; left: 50%; top: 50%; transform: translate(-50%, -50%); background-color: rgba(255, 255, 255, 0.9);border: 1px solid #ccc">
    <div style="background-color: #fefefe; padding: 20px; border-radius: 10px; max-width: 400px;">
        <span style="color: #aaa; float: right; font-size: 28px; font-weight: bold; cursor: pointer;" class="depositClose">&times;</span>
        <h2 style="text-align: center;">Deposit</h2>
        <form id="depositForm" style="text-align: center;">
            <div style="margin-bottom: 10px;">
                <label for="phone">Phone Number:</label><br>
                <input type="text" id="depositPhone" name="phone" required>
            </div>
            <div>
                <label for="amount">Amount:</label><br>
                <input type="number" id="depositAmount" name="amount" required>
            </div>
            <button type="submit" style="background-color: #4CAF50; color: white; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin-top: 20px; cursor: pointer; border: none; border-radius: 5px;" class="confirm-btn">Confirm</button>
        </form>
    </div>
</div>
<script>
// Get the Deposit modal
var depositModal = document.getElementById("depositModal");
// Get the Withdraw modal
var withdrawModal = document.getElementById("withdrawModal");

// Get the button that opens the Deposit modal
var depositBtn = document.getElementById("depositBtn");
// Get the button that opens the Withdraw modal
var withdrawBtn = document.getElementById("withdrawBtn");

// When the user clicks on the button, open the Deposit modal
depositBtn.onclick = function() {
  depositModal.style.display = "block";
}
// When the user clicks on the button, open the Withdraw modal
withdrawBtn.onclick = function() {
  withdrawModal.style.display = "block";
}

// Other script for closing modals, form submission, etc.
</script>


                                                            </div>
                                                            <!-- deposit button end -->
                                                        </div>
                                                        <p class="m-b-0 text-white"><span class="label label-danger m-r-10"></span>
</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card prod-p-card card-blue">
                                                    <div class="card-body">
                                                        <div class="row align-items-center m-b-30">
                                                        <?php include('my_withdrawals_wallet.php')?>
                                                            <div class="col-auto">
                                                             <!-- Button to open the Withdraw modal -->
<button style="background-color: white; border: none; color: black; padding: 5px 10px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer;border-radius: 4px;" id="withdrawBtn">Withdraw</button>

<!-- The Withdraw Modal -->
<div id="withdrawModal" style="display: none; position: fixed; z-index: 1000; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0, 0, 0, 0.4);">
    <div style="background-color: #fefefe; margin: 10% auto; padding: 20px; border: none; border-radius: 10px; max-width: 400px;">
        <span style="color: #aaa; float: right; font-size: 28px; font-weight: bold; cursor: pointer;" class="withdrawClose">&times;</span>
        <h2 style="text-align: center;">Withdraw</h2>
        <form id="withdrawForm" style="text-align: center;">
            <div style="margin-bottom: 10px;">
                <label for="phone">Phone Number:</label><br>
                <input type="text" id="withdrawPhone" name="phone" required>
            </div>
            <div>
                <label for="amount">Amount:</label><br>
                <input type="number" id="withdrawAmount" name="amount" required>
            </div>
            <button type="submit" style="background-color: #FF6347; color: white; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin-top: 20px; cursor: pointer; border: none; border-radius: 5px;" class="confirm-btn">Confirm</button>
        </form>
    </div>
</div>

<script>
// Get the Withdraw modal
var withdrawModal = document.getElementById("withdrawModal");

// Get the button that opens the Withdraw modal
var withdrawBtn = document.getElementById("withdrawBtn");

// Get the <span> element that closes the Withdraw modal
var withdrawClose = document.getElementsByClassName("withdrawClose")[0];

// When the user clicks on the button, open the Withdraw modal
withdrawBtn.onclick = function() {
  withdrawModal.style.display = "block";
}

// When the user clicks on <span> (x), close the Withdraw modal
withdrawClose.onclick = function() {
  withdrawModal.style.display = "none";
}

// When the user clicks anywhere outside of the Withdraw modal, close it
window.onclick = function(event) {
  if (event.target == withdrawModal) {
    withdrawModal.style.display = "none";
  }
}

// Form Submission
var withdrawForm = document.getElementById("withdrawForm");
withdrawForm.addEventListener("submit", function(event) {
  event.preventDefault();
  // Get values from form fields
  var phone = document.getElementById("withdrawPhone").value;
  var amount = document.getElementById("withdrawAmount").value;
  // You can handle the form submission here, like sending the data to a server
  // For now, let's just log the values
  console.log("Withdraw Phone Number:", phone);
  console.log("Withdraw Amount:", amount);
  // Close the Withdraw modal
  withdrawModal.style.display = "none";
});
</script>

                                                            </div>
                                                        </div>
                                                        <p class="m-b-0 text-white"><span class="label label-primary m-r-10"></span>
</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card prod-p-card card-green">
                                                    <div class="card-body">
                                                        <div class="row align-items-center m-b-30">
                                                            <?php include("earnings_wallet.php") ?>
                                                            <div class="col-auto">
                                                                <i class="fas fa-dollar-sign text-c-green f-18"></i>
                                                            </div>
                                                        </div>
                                                        <p class="m-b-0 text-white"><span class="label label-success m-r-10"></span>
</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6" href="deposits.php">
                                                <div class="card prod-p-card card-yellow">
                                                    <div class="card-body">
                                                        <div class="row align-items-center m-b-30">
                                                            <?php include("trading_wallet.php") ?>
                                                            <div class="col-auto">
                                                                <i class="fas fa-tags text-c-yellow f-18" href="deposits.php"></i>
                                                            </div>
                                                        </div>
                                                        <p class="m-b-0 text-white"><span class="label label-warning m-r-10"></span>
</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                    <div class="page-header-breadcrumb">
                                        <ul class=" breadcrumb breadcrumb-title breadcrumb-padding">
                                            <li class="breadcrumb-item">
                                                <a href="index.ph"><i class="feather icon-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Share your affiliate link to earn a 10% bonus.</a> </li><br>
                                        </ul>
                                       
                                    </div>
                                    
                                   
                                </div>
                                        </div>
                                        <div class="col-md-12">
                                            <p style="font-weight:bold;">
                                                Let Your Money Do The Hardwork!
                                            </p>
                                            <p style="width:100%;">
                                            We are regulated by the Capital Markets Authority of Kenya to let you invest in company shares to profit from dividends when your choosen company makes profit. Choose your plan and invest in multiple portfolios.Share your affiliate link for bonuses.
                                            </p>
                                     </div>
                                        <div class="col-md-12">
    <div class="card table-card">
        <div class="card-block p-b-0">
            <div class="table-responsive" style="overflow-x: auto;">
            <table id="company-table" class="table table-hover m-b-0" style="min-width: 320px;">
    <thead>
        <tr>
            <th style="min-width: 120px; padding: 4px;">image</th>
            <th style="min-width: 120px; padding: 4px;">Company</th>
            <th style="min-width: 120px; padding: 4px;">Share Price</th>
            <th style="min-width: 100px; padding: 4px;">BUY/SELL SHARES</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $eo = array('echo'=>0);
        $results = sql("SELECT id, image, name, share_price FROM companies",$eo); // Assuming sql() fetches multiple rows

        // Loop through the fetched data and generate table rows
        foreach ($results as $row) {
            echo "<tr>";
            echo "<td style='width: 100px; height: 100px;'><img src='backend/images/" . $row['image'] . "' alt='Company Image' style='max-width: 100%; max-height: 100%;'></td>";

            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['share_price'] . "</td>";
            echo "<td>";
            echo "<div>";
            echo "<button class='btn btn-success buy-btn' onclick=\"openModal('buy', {$row['share_price']})\">BUY</button>";
            echo "<button class='btn btn-danger sell-btn' onclick=\"openModal('sell', {$row['share_price']})\">SELL</button>";
            echo "</div>";
            echo "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

            </div>
        </div>

        <!-- Modal -->
        <!-- Modal -->
<div id="myModal" class="modal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 9999;">
    <div class="modal-content" style="background-color: #fff; width: 300px; padding: 20px; border-radius: 5px; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
        <span onclick="closeModal()" style="float:right; cursor:pointer;">&times;</span>
        <h2 id="modal-title"></h2>
        <p>Share Price: $<span id="share-price"></span></p>
        <label for="shares">Number of shares:</label>
        <input type="number" id="shares" oninput="calculateTotal()">
        <p>Total Amount: <span id="total-amount"></span></p>
    </div>
</div>


        <script>
    // Open the modal based on action (buy or sell)
    function openModal(action, companyId) {
        var modal = document.getElementById("myModal");
        var modalTitle = document.getElementById("modal-title");

        if (action === 'buy') {
            modalTitle.textContent = 'Buy Shares';
        } else if (action === 'sell') {
            modalTitle.textContent = 'Sell Shares';
        }

        modal.style.display = "block";
        document.getElementById("shares").value = ''; // Clear the input field
        fetchSharePrice(companyId); // Fetch share price based on company ID
    }

    // Close the modal
    function closeModal() {
        var modal = document.getElementById("myModal");
        modal.style.display = "none";
    }

    // Calculate total amount based on number of shares and share price
function calculateTotal() {
    var sharesInput = document.getElementById("shares").value;
    var sharePrice = parseFloat(document.getElementById("share-price").textContent);
    var totalAmount = parseFloat(sharesInput) * sharePrice; // Remove parseFloat from sharePrice, as it's already a number
    document.getElementById("total-amount").textContent = '$' + totalAmount.toFixed(2);
}


    // Fetch share price from database based on company ID
    function fetchSharePrice(companyId) {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    document.getElementById("share-price").textContent = response.sharePrice;
                    calculateTotal();
                } else {
                    console.error('Failed to fetch share price.');
                }
            }
        };
        xhr.open('GET', 'fetch_share_price.php?companyId=' + companyId, true);
        xhr.send();
    }
</script>


    </div>
</div>








                                        </div>



                                    </div>
                                </div>
                                <div id="income-analysis" style="height:100px"></div>
                            </div>
                        </div>






                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>

    <div id="styleSelector">
    </div>

    </div>
    </div>
    </div>
    </div>


    <!--[if lt IE 10]>
    <div class="ie-warning">
        <h1>Warning!!</h1>
        <p>You are using an outdated version of Internet Explorer, please upgrade
            <br/>to any of the following web browsers to access this website.
        </p>
        <div class="iew-container">
            <ul class="iew-download">
                <li>
                    <a href="http://www.google.com/chrome/">
                        <img src="files/assets//images/browser/chrome.png" alt="Chrome">
                        <div>Chrome</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.mozilla.org/en-US/firefox/new/">
                        <img src="files/assets//images/browser/firefox.png" alt="Firefox">
                        <div>Firefox</div>
                    </a>
                </li>
                <li>
                    <a href="http://www.opera.com">
                        <img src="files/assets//images/browser/opera.png" alt="Opera">
                        <div>Opera</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.apple.com/safari/">
                        <img src="files/assets//images/browser/safari.png" alt="Safari">
                        <div>Safari</div>
                    </a>
                </li>
                <li>
                    <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                        <img src="files/assets//images/browser/ie.png" alt="">
                        <div>IE (9 & above)</div>
                    </a>
                </li>
            </ul>
        </div>
        <p>Sorry for the inconvenience!</p>
    </div>
<![endif]-->


    <script type="text/javascript" src="files/bower_components/jquery/js/jquery.min.js"></script>
    <script type="text/javascript" src="files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="files/bower_components/popper.js/js/popper.min.js"></script>
    <script type="text/javascript" src="files/bower_components/bootstrap/js/bootstrap.min.js"></script>

    <script src="files/assets//pages/waves/js/waves.min.js"></script>

    <script type="text/javascript" src="files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

    <script src="files/assets//pages/chart/float/jquery.flot.js"></script>
    <script src="files/assets//pages/chart/float/jquery.flot.categories.js"></script>
    <script src="files/assets//pages/chart/float/curvedLines.js"></script>
    <script src="files/assets//pages/chart/float/jquery.flot.tooltip.min.js"></script>

    <script src="files/assets//pages/widget/amchart/amcharts.js"></script>
    <script src="files/assets//pages/widget/amchart/serial.js"></script>
    <script src="files/assets//pages/widget/amchart/light.js"></script>

    <script src="../../../developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="files/assets//pages/google-maps/gmaps.js"></script>

    <script src="files/assets//js/pcoded.min.js"></script>
    <script src="files/assets//js/vertical/vertical-layout.min.js"></script>
    <script type="text/javascript" src="files/assets//pages/dashboard/crm-dashboard.min.js"></script>
    <script type="text/javascript" src="files/assets//js/script.min.js"></script>
</body>

<!-- Mirrored from demo.dashboardpack.com/admindek-html/default/dashboard-crm.ph by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Apr 2024 18:23:12 GMT -->

</html>