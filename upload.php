<?php
$uploaddir = 'uploads/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "Possible file upload attack!\n";
}

echo 'Here is some more debugging info:';
print_r($_FILES);

print "</pre>";

$servername = "localhost";
$username = "root";
$password = 1996;
$dbname = "db";
$name=$_POST['name'];
$rollno=$_POST['rollno'];
$phone=$_POST['phoneno'];
$product=$_POST['product'];
$disp=$_POST['disp'];
$cat=$_POST['cat'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO register (name,rollno,phone,product,category,description,filename)
VALUES ('$name', '$rollno', '$phone','$product','$cat','$disp','$uploadfile')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
header("Location: reg.php?categoryname=$cat&name=$name&rollno=$rollno&phone=$phone&product=$product&disp=$disp&cat=$cat&filename=$uploadfile");
die();

$conn->close();
?> 
