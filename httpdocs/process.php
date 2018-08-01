<?php
$servername = "localhost";
$username = "admin";
$password = "password";
$dbname = "sign-in-app";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$inputname = $_POST['fieldname'];
$company = $_POST['company'];
header("location: index.php");
$sql = "INSERT INTO visitors (name, company, status, signintimestamp)
VALUES ('$inputname', '$company', '1', NOW())";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$array = explode(',', $_POST['guestsfield']);
$id=mysqli_insert_id($conn);//get your project id here
$guests="";    
foreach($array as $guestsfield)
{
       //modify below to add $id along with $tag_name
   $guests.="('{$id}','{$guestsfield}'),"; // you need to remove last comma else it will throw mysql error  
}

if($guests!="")
{
    //rtrim to remove last ',' from string. 
  $sql=rtrim($sql,',');

$sql = "INSERT INTO visitors (name, company, status, signintimestamp)
VALUES ('$guests', '$company', '1', NOW())";
}

$conn->close();
?>




