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

$sql_insert="CREATE TABLE IF NOT EXISTS hardik2 (first_name text NOT NULL,last_name text NOT NULL,age integer NOT NULL,email text NOT NULL,DOB date NOT NULL,gender text NOT NULL,department text NOT NULL,college_name text NOT NULL,mobile BIGINT NOT NULL, address text NOT NULL,PRIMARY KEY (`mobile`))";

if(!mysqli_query($con,$sql_insert))
{
// die("table not create".mysql_error());
echo "Error creating table: " . mysqli_error($con);
}
else
{
echo("table created");
}
$first_name=$_POST["first_name"];

//echo $;
$last_name=$_POST["last_name"];

//echo $a;
$age=$_POST["age"];

//echo $a;
$email=$_POST["email"];

//echo $a;
$DOB=$_POST["DOB"];

//echo $a;
$gender=$_POST["gender"];

//echo $a;
$department=$_POST["department"];

//echo $a;
$college_name=$_POST["college_name"];

echo $college_name;
$mobile=$_POST["mobile"];

//echo $a;
$address=$_POST["address"];

//echo $a;
$sql="INSERT INTO hardik2 (first_name, last_name, age, email, DOB, gender, department, college_name,mobile, address ) VALUES ('$first_name','$last_name',$age,'$email','$DOB','$gender','$department','$college_name',$mobile,'$address')";
if (!mysqli_query($con,$sql))
{
  // die('Error:in insert data ' . mysqli_error());
  echo "Error inserting data: " . mysqli_error($con);
}
else{
echo "1 record added";
}
$result = mysqli_query($con,"SELECT * FROM hardik2");
echo "<table border='1'>


<tr>


<th>first_name</th>


<th>last_name</th>


<th>age</th>
<th>email</th>


<th>DOB</th>
<th>gender</th>
<th>department</th>
<th>college_name</th>
<th>Mobile</th>
<th>address</th>
<th>Update</th>
<th>Delete</th>


</tr>";


 


while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))


  {


  echo "<tr>";


  echo "<td>" . $row['first_name'] . "</td>";
  echo "<td>" . $row['last_name'] . "</td>";
  echo "<td>" . $row['age'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['DOB'] . "</td>";
  echo "<td>" . $row['gender'] . "</td>";
  echo "<td>" . $row['department'] . "</td>";


  echo "<td>" . $row['college_name'] . "</td>";


  echo "<td>" . $row['mobile'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['address'] . "</td>";?>



<td><a href="update1.php?id=<?php echo $row['mobileno']; ?>">Edit</a>


</td>
    <td><a href="delete1.php?id=<?php echo $row['mobileno']; ?>">Delete</a></td>
  <?php
  echo "</tr>";


  }
mysqli_close($con);
require 'p2.php';
?>
