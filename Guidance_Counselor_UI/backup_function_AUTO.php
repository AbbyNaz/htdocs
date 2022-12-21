<?php

include_once('backup_function.php');

include_once("../connections/connection.php");

//Called on codeLogin.php on guidance

function AutoBackUpDB($num_days){

    define('BACKUP_FOLDER', 'C:'.DIRECTORY_SEPARATOR.'Users'.DIRECTORY_SEPARATOR.$GLOBALS['computerUsername'].DIRECTORY_SEPARATOR.'Documents'.DIRECTORY_SEPARATOR.'Database Backup');

    if (!is_dir(BACKUP_FOLDER)) {
        mkdir(BACKUP_FOLDER, 0775, true);
    }

    // Determine the location where the backup files are stored
    $backup_folder = BACKUP_FOLDER;

    // Scan the folder and get an array of all the files in it
    $files = scandir($backup_folder);

    // Initialize a variable to store the latest backup date
    $latest_backup_date = null;

    // Iterate over the files
    foreach ($files as $file) {
    // Skip if the file is not a SQL backup file
    if (strpos($file, '.sql') === false) {
        continue;
    }

    // Extract the date from the filename using a regular expression
    preg_match('/\d{4}-\d{2}-\d{2}/', $file, $matches);
    $date = $matches[0];

    // If this is the first iteration, or if the date is newer than the current latest backup date,
    // update the latest backup date
    if ($latest_backup_date === null || $date > $latest_backup_date) {
        $latest_backup_date = $date;
    }
    }

    // Convert the latest backup date and the current date into timestamps
    $latest_backup_timestamp = strtotime($latest_backup_date);
    $current_timestamp = strtotime(date('Y-m-d'));

    // Calculate the difference between the two dates in days
    $diff = (new DateTime(date('Y-m-d', $latest_backup_timestamp)))->diff(new DateTime(date('Y-m-d', $current_timestamp)))->days;

    // If the difference is greater than the number of days you want to back up, perform the autobackup
    if ($diff > $num_days) {
        backDb();
        exit();
    }
}