<!DOCTYPE html>
<html>
<head>
<head>
  <title><? echo $_GET['name'];?></title>
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
<button type="button" class="btn btn-danger btn-block">Add successfully posted!</button>
</div>
<br>
echo "<img src='".$row["filename"]."'><br>";
<div class="b">
<p><ol>	
<button type="submit" class="btn btn-primary btn-block">Name : <? echo $_GET['name'];?></button>
<button type="submit" class="btn btn-primary btn-block">Rollno : <? echo $_GET['rollno'];?></button>
<button type="submit" class="btn btn-primary btn-block">Phone No : <?echo $_GET['phone'];?></button>
<button type="submit" class="btn btn-primary btn-block">Product : <?echo $_GET['product'];?></button>
<button type="submit" class="btn btn-primary btn-block">Category : <? echo $_GET['cat'];?></button>
<button type="submit" class="btn btn-primary btn-block">Description: <?echo $_GET['disp'];?></button>
</ol></p>
</div>
</form>
</body>
</html>
