<?php
  // Step 1: Create Database Connection
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "root";
  $dbname = "photos";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  // Check the connection is good with no errors
  if (mysqli_connect_errno()) {
    die ("Database connection failed: " .
      mysqli_connect_error() .
      " (" . mysqli_connect_errno() . ")"
    );
  }
function redirect_to($location)
{
  header('Location:' .$location);
  exit;
}
?>