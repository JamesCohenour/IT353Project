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
(123456789, 'password'),
(999887777, 'password'),	
(677678989, 'password'),
(333445555, 'password'),
(987654321, 'password'),
(666884444, 'password'),
(453453453, 'password'),
(987987987, 'password'),
(888665555, 'password')";

$stmt = sqlsrv_query($conn, $sql);
	echo "<br/> ";
	if($stmt===false)
	{
		die(print_r(sqlsrv_errors(), true)); 
	}		
	else
		echo "<br/>Data added to " . $tableName;
	sqlsrv_free_stmt($stmt);

?>