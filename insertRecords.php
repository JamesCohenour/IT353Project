<?php
$serverName = "itkmssql";
    $connectionOptions = array(
	//*****************************
        "Database" => "Group5Project",
        "Uid" => "IT353F912",
        "PWD" => "simple27"
    );
	
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    if($conn)
        echo "Connected!";
	else
		die(print_r(sqlsrv_errors(), true));
	
$tableName = "Users";	
$sql = "Insert INTO $tableName
VALUES
(123456789, 'John'),
(999887777, 'Alicia'),	
(677678989, 'Cecilia'),
(333445555, 'Franklin'),
(987654321, 'Jennifer'),
(666884444, 'Ramish'),
(453453453, 'Joyce'),
(987987987, 'Ahmad'),
(888665555, 'James')";

$stmt = sqlsrv_query($conn, $sql);
	echo "<br/> ";
	if($stmt===false)
	{
		die(print_r(sqlsrv_errors(), true)); 
	}		
	else
		echo "<br/>Data added to " . $tableName;
	sqlsrv_free_stmt($stmt);