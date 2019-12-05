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
{
    //echo "Connected!";
}
else
{
    die(print_r(sqlsrv_errors(), true));
}
/*
$sql = "select * from Users";
$stmt = sqlsrv_query($conn, $sql);
echo "<br/> ";
if($stmt===false)
{
	die(print_r(sqlsrv_errors(), true)); 
}		
else
{
	while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
        echo $row['Id'].", ".$row['Password'].", <br />";  }
}
sqlsrv_free_stmt($stmt);
*/

$sql = "select * from Users where Id=".$_POST['id']." and Password=".$_POST['password'];
echo "<br/> ";
$stmt = sqlsrv_query($conn, $sql);
echo "<br/> ";
if($stmt===false)
{
	die(print_r(sqlsrv_errors(), true)); 
}		
else
{
    echo "Welcome ".$_POST['id'];
}
sqlsrv_free_stmt($stmt);
?>