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
$sql = "select * from Employee";
$stmt = sqlsrv_query($conn, $sql);
echo "<br/> ";
if($stmt===false)
{
	die(print_r(sqlsrv_errors(), true)); 
}		
else
{
	while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
        echo $row['Ssn'].", ".$row['Fname'].", ".$row['Minit'].", ".$row['Lname'].", ".$row['Address'].", ".$row['Sex'].", ".$row['Salary'].", ".$row['Super_ssn'].", ".$row['Dno'].", <br />";
  }
}
sqlsrv_free_stmt($stmt);
*/

if($_POST["Search"] == 1)
{
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
        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
            echo $row['Id'].", ".$row['Password'].", <br />";
      }
    }
	sqlsrv_free_stmt($stmt);
}
?>