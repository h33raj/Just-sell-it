<!DOCTYPE html>
<html>
<head>
<head>
  <title>Stationery</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="books.css">	
</head>
<style>
body {
    background-color: #90EE90;
}

h1{
    color: #000000;
    text-align: center;
    font-weight:bold;
}
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script> 
$(document).ready(function(){
    $('#c').fadeOut(1000);
    $("b").click(function(){
     $("c").slideDown();	
	});
    });
});
</script>
</script> </head>
<body>
<a href="main.html">
    <img src="img/back.png" style="float:left;" height="50" width="50">
  </a>

<br>
<br>
<div class="a" align='center'>
<button type="button" class="btn btn-danger btn-block">Search</button>
</div>
<?php
$servername = "localhost";
$username = "root";
$password = 1996;
$dbname = "db";
$find = $_POST['search']; 

 if ($find == "") 
 { 
 echo "<p>You forgot to enter a search term"; 
 exit; 
 } 
 
 // Otherwise we connect to our Database 
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM register WHERE description LIKE '%$find%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
   while($row = $result->fetch_assoc()) {
	    echo "<img src='".$row["filename"]."'><br>";
        echo "<div class=\"btn btn-danger btn-block\" align='center'>" ."Name:" . $row["name"]. "<br>Rollno: " . $row["rollno"]. "<br>Phone:" . $row["phone"] ."<br>Product:" .$row["Product"] ."<br>Category:" .$row["category"] ."<br>Description:" .$row["description"] ."</div>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>
