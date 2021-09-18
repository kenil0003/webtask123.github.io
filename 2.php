<?php
$con = mysqli_connect("localhost","root","");
$dbname="studentdatabase1";
if (!$con)
{
  echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    // echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
// die('Could not connect: ' . mysql_error());
}
$sqldb = "CREATE DATABASE IF NOT EXISTS $dbname";
if (!mysqli_query($con,$sqldb))
{
// die('Error: ' . mysql_error());
echo "Error creating database: " . mysqli_error($con);
}
else
{
echo "1 db created\n";
}
mysqli_select_db($con,"studentdatabase1");

$sql_insert="INSERT TABLE IF NOT EXISTS hardik (firstname text NOT NULL,lastname text NOT NULL,age int NOT NULL,email text,dob DATE NOT NULL,gender text NOT NULL,department text NOT NULL,`collage_name` text,phone int, address text,PRIMARY KEY (`phone`))";

if(!mysqli_query($con,$sql_insert))
{
// die("table not create".mysql_error());
echo "Error creating table: " . mysqli_error($con);
}
else
{
echo("table created");
}
mysqli_close($con);
?>
