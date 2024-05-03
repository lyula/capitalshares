<?php

  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "usersdata";

 if (!$con = mysqli_connect($dbhost, $dbuser , $dbpass , $dbname))
 {
       
       die("failed to connet!");
 }