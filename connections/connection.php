<?php

global $database;
$database = "guidance_and_counseling";

global $computerUsername;
$computerUsername = 'Nick'; // for folder directory

function connection() {

  $host = "localhost";
  $username = "root";
  $password = "";
  $database = "guidance_and_counseling";

  $con = new mysqli($host, $username, $password, $database);

  if ($con->connect_error) {
    echo $con->connect_error;
  } else {
    return $con;
  }
}

