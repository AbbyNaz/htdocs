<?php
include_once("../connections/connection.php");

$conn = connection();

// $database = $GLOBALS['database'];
// $file_path = $_FILES['import_file']['tmp_name'];
$filePath = $_FILES['import_file']['tmp_name'];

if (isset($_POST['restorenow'])) {
    $Result = restoreMysqlDB($filePath,$conn);

    // sleep(5);
    header("Location: gc___backup-restore.php?Type=".$Result['type']);
}

function restoreMysqlDB($filePath, $conn)
{
        // Disable foreign key checks
    $disable_fk_checks_query = "SET FOREIGN_KEY_CHECKS = 0";
    mysqli_query($conn, $disable_fk_checks_query);

    // Do not use AUTO_INCREMENT for zero values
    $auto_increment_query = "SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'";
    mysqli_query($conn, $auto_increment_query);

    // Set maximum execution time to 5 minutes
    ini_set('max_execution_time', 300);

    // Check if the file input is set and if it is a valid file
    if (isset($_FILES['import_file']) && is_uploaded_file($filePath)) {

        // Get a list of all the tables in the database
        $tables_query = "SHOW TABLES";
        $tables_result = mysqli_query($conn, $tables_query);

        // Drop each table
        while ($table = mysqli_fetch_array($tables_result)) {
            $drop_table_query = "DROP TABLE `" . $table[0] . "`";
            mysqli_query($conn, $drop_table_query);
        }

        // Get the content of the uploaded file
        $content = file_get_contents($filePath);

        // Split the content by SQL statements
        $statements = explode(';', $content);

        // Execute each SQL statement
        foreach ($statements as $statement) {
            // Skip empty statements and statements that create tables or modify the database structure
            if (trim($statement) == '' || preg_match('/^(CREATE|DROP|ALTER)/i', $statement)) {
                continue;
            }

            // Execute the statement and check for errors
            if (!mysqli_query($conn, $statement)) {
                die("Error executing statement: " . mysqli_error($conn));
            }
        }

        if (mysqli_error($conn)) {
            $response = array(
                "type" => "error",
                "message" => mysqli_error($conn)
            );
        } else {
            $response = array(
                "type" => "success",
                "message" => "Database Restore Completed Successfully."
            );
        }
    }

    return $response;
}

// function restoreMysqlDB($filePath, $conn)
// {
//     $sql = '';
//     $error = '';
    
//     if (file_exists($filePath) && is_uploaded_file($filePath)) {
//         // Disable foreign key checks
//         $disable_fk_checks_query = "SET FOREIGN_KEY_CHECKS = 0";
//         mysqli_query($conn, $disable_fk_checks_query);

//         // Do not use AUTO_INCREMENT for zero values
//         $auto_increment_query = "SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'";
//         mysqli_query($conn, $auto_increment_query);

//         // Set maximum execution time to 5 minutes
//         ini_set('max_execution_time', 300);


//         $lines = file($filePath);
        
//         foreach ($lines as $line) {
            
//             // Ignoring comments from the SQL script
//             if (substr($line, 0, 2) == '--' || $line == '') {
//                 continue;
//             }
            
//             $sql .= $line;
            
//             if (substr(trim($line), - 1, 1) == ';') {
//                 $result = mysqli_query($conn, $sql);
//                 if (! $result) {
//                     $error .= mysqli_error($conn) . "\n";
//                 }
//                 $sql = '';
//             }
//         } // end foreach
        
//         if ($error) {
//             $response = array(
//                 "type" => "error",
//                 "message" => $error
//             );
//         } else {
//             $response = array(
//                 "type" => "success",
//                 "message" => "Database Restore Completed Successfully."
//             );
//         }
//     } // end if file exists
//     return $response;
// }
