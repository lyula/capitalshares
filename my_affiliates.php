<?php
session_start();

include ("backend/lib.php");
include ("functions.php");

$user_data = check_login($con);
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.dashboardpack.com/admindek-html/default/dashboard-crm.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Apr 2024 18:23:09 GMT -->

<head>
    <title>Capital Shares Dashboard</title>


    <!--[if lt IE 10]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Admindek Bootstrap admin template made using Bootstrap 5 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords"
        content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-CiWQgLSdMeZvZcYSd/5yE0z6j9rrJ+52DHp/ykXPLv1NRaRjmrSGV7+TuXQ+yBU1kiJDmGbH6Yv6swU5ycFpKw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

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
                    <div class="navbar-logo" style="display: flex; align-items: center;">
                        <a href="index.html" style="display: flex; align-items: center;">
                            <img class="img-fluid" src="files/assets/images/capital.jpeg" alt="Theme-Logo"
                                style="height: 50px; width: 50px; border-radius: 50%;" />
                            <p style="margin-left: 10px;">Capital Shares LTD</p>
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
                                    <ul class="show-notification notification-view dropdown-menu"
                                        data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">

                                        <li>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0">
                                                    <img class="img-radius" src="files/assets//images/avatar-4.jpg"
                                                        alt="Generic placeholder image">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h5 class="notification-user"><?php echo $user_data['username'] . "</strong>";
                                                    ?> </h5>
                                                    <p class="notification-msg">Welcome to your Capital Shares
                                                        dashboard.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0">
                                                    <img class="img-radius" src="files/assets//images/avatar-3.jpg"
                                                        alt="Generic placeholder image">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h5 class="notification-user">Joseph William</h5>
                                                    <p class="notification-msg">Welcome to your Capital Shares
                                                        dashboard.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0">
                                                    <img class="img-radius" src="files/assets//images/avatar-4.jpg"
                                                        alt="Generic placeholder image">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h5 class="notification-user">Sara Soudein</h5>
                                                    <p class="notification-msg">Welcome to your Capital Shares
                                                        dashboard.</p>
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
                                        <img src="files/assets/images/capital.jpeg" class="img-radius"
                                            alt="Company-Profile-Image" style="width: 50px;height: 50px;">
                                        <span> <?php echo $user_data['username'] . "</strong>";
                                        ?> </span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu"
                                        data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">



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
                                        <input type="text" id="search-friends" name="footer-email" class="form-control"
                                            placeholder="Search Friend">
                                        <button class="btn btn-primary waves-effect waves-light" type="button">
                                            <i class="feather icon-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="main-friend-list">
                                <div class="media userlist-box waves-effect waves-light" data-id="1"
                                    data-status="online" data-username="Josephin Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius img-radius"
                                            src="files/assets//images/avatar-3.jpg" alt="Generic placeholder image ">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="chat-header">Josephin Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box waves-effect waves-light" data-id="2"
                                    data-status="online" data-username="Lary Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="files/assets//images/avatar-2.jpg"
                                            alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Lary Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box waves-effect waves-light" data-id="3"
                                    data-status="online" data-username="Alice">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="files/assets//images/avatar-4.jpg"
                                            alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alice</div>
                                    </div>
                                </div>
                                <div class="media userlist-box waves-effect waves-light" data-id="4"
                                    data-status="offline" data-username="Alia">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="files/assets//images/avatar-3.jpg"
                                            alt="Generic placeholder image">
                                        <div class="live-status bg-default"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alia<small class="d-block text-muted">10 min
                                                ago</small></div>
                                    </div>
                                </div>
                                <div class="media userlist-box waves-effect waves-light" data-id="5"
                                    data-status="offline" data-username="Suzen">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="files/assets//images/avatar-2.jpg"
                                            alt="Generic placeholder image">
                                        <div class="live-status bg-default"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Suzen<small class="d-block text-muted">15 min
                                                ago</small></div>
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
                                <img class="media-object img-radius img-radius m-t-5"
                                    src="files/assets//images/avatar-2.jpg" alt="Generic placeholder image">
                            </div>
                        </a>
                        <div class="flex-grow-1 chat-menu-content">
                            <div class>
                                <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?
                                </p>
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
                                <img class="media-object img-radius img-radius m-t-5"
                                    src="files/assets//images/avatar-2.jpg" alt="Generic placeholder image">
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
                                                <a href="dashboard.php" class="waves-effect waves-dark">
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
                            <?php include ("wallets.php"); ?>
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">

                                        <div class="row">




                                        </div>
                                    </div>
                                    <?php include ("affiliate.php"); ?>

                                </div>






                            </div>
                            <h5>My affiliate bonus</h5>
                            <div class="card card-block p-b-0">
                               <table id="deposits-table" class="table table-hover m-b-0" style="min-width: 320px;">
                                  <thead>
                                    <tr>
                                        <th style="min-width: 120px; padding: 4px;">Total Bonus</th>
                                        <th style="min-width: 120px; padding: 4px;">Date Paid</th>

                                    </tr>
                                 </thead>
                               </table>
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

    <?php
    include ("footer.php");
    ?>
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

    <script
        src="../../../developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="files/assets//pages/google-maps/gmaps.js"></script>

    <script src="files/assets//js/pcoded.min.js"></script>
    <script src="files/assets//js/vertical/vertical-layout.min.js"></script>
    <script type="text/javascript" src="files/assets//pages/dashboard/crm-dashboard.min.js"></script>
    <script type="text/javascript" src="files/assets//js/script.min.js"></script>
</body>

<!-- Mirrored from demo.dashboardpack.com/admindek-html/default/dashboard-crm.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Apr 2024 18:23:12 GMT -->

</html>