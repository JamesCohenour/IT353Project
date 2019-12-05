<?php
    $serverName = "itkmssql";
    $connectionOptions = array(
	//*******************************
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
	$sql ="IF NOT EXISTS (SELECT * FROM Sys.tables
	WHERE name =N'Users' and type =N'U')
	BEGIN
	CREATE TABLE $tableName ( 
	Id char(9) PRIMARY KEY NOT NULL,
	Password varchar(15) NOT NULL)		
	END";
	$stmt = sqlsrv_query($conn, $sql);	
	if($stmt)
        echo "<br/>Table " . $tableName. " Created!";
	else
		die(print_r(sqlsrv_errors(), true));
	sqlsrv_free_stmt($stmt);
			
?>