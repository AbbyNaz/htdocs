<?php

include_once("../connections/connection.php");
    
    error_reporting(0);
	function backDb($tables = '*'){
	
		$conn = connection();
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}

		
		if($tables == '*'){
			$tables = array();
			$sql = "SHOW TABLES";
			$query = $conn->query($sql);
			while($row = $query->fetch_row()){
				$tables[] = $row[0];
			}
		}
		else{
			$tables = is_array($tables) ? $tables : explode(',',$tables);
		}

		
		$outsql = '';
		foreach ($tables as $table) {
    
		   
		    $sql = "SHOW CREATE TABLE $table";
		    $query = $conn->query($sql);
		    $row = $query->fetch_row();
		    
		    $outsql .= "\n\n" . $row[1] . ";\n\n";
		    
		    $sql = "SELECT * FROM $table";
		    $query = $conn->query($sql);
		    
		    $columnCount = $query->field_count;

		   
		    for ($i = 0; $i < $columnCount; $i ++) {
		        while ($row = $query->fetch_row()) {
		            $outsql .= "INSERT INTO $table VALUES(";
		            for ($j = 0; $j < $columnCount; $j ++) {
		                $row[$j] = $row[$j];
		                
		                if (isset($row[$j])) {
		                    $outsql .= '"' . $row[$j] . '"';
		                } else {
		                    $outsql .= '""';
		                }
		                if ($j < ($columnCount - 1)) {
		                    $outsql .= ',';
		                }
		            }
		            $outsql .= ");\n";
		        }
		    }
		    
		    $outsql .= "\n"; 
		}
		$currentDateTime = date('Y-m-d');

		define('BACKUP_FOLDER', 'C:'.DIRECTORY_SEPARATOR.'Users'.DIRECTORY_SEPARATOR.$GLOBALS['computerUsername'].DIRECTORY_SEPARATOR.'Documents'.DIRECTORY_SEPARATOR.'Database Backup');
		
		if (!is_dir(BACKUP_FOLDER)) {
			mkdir(BACKUP_FOLDER, 0775, true);
		}

	    $backup_file_name = BACKUP_FOLDER.DIRECTORY_SEPARATOR.$GLOBALS['database'].'_database_'.$currentDateTime.'.sql';

	    $fileHandler = fopen($backup_file_name, 'w+');
	    fwrite($fileHandler, $outsql);
	    fclose($fileHandler);

	   
	    header('Content-Description: File Transfer');
	    header('Content-Type: application/octet-stream');
	    header('Content-Disposition: attachment; filename=' . basename($backup_file_name));
	    header('Content-Transfer-Encoding: binary');
	    header('Expires: 0');
	    header('Cache-Control: must-revalidate');
	    header('Pragma: public');
	    header('Content-Length: ' . filesize($backup_file_name));
	    ob_clean();
	    flush();
	    readfile($backup_file_name);
	    exec('rm ' . $backup_file_name);

	}

?>