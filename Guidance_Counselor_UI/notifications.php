<?php

// // Connect to the database
// $conn = mysqli_connect('host', 'username', 'password', 'database');

// // Check if an ID was passed in the AJAX request
// if (isset($_GET['id'])) {
//   // Escape the ID to prevent SQL injection attacks
//   $id = mysqli_real_escape_string($conn, $_GET['id']);

//   // Retrieve the notification data from the database
//   $query = "SELECT name, description, action_type FROM notifications WHERE id = '$id'";
//   $result = mysqli_query($conn, $query);
//   $notification = mysqli_fetch_assoc($result);

//   // Return the notification data as a JSON object
//   echo json_encode($notification);
// }

// // Close the database connection
// mysqli_close($conn);