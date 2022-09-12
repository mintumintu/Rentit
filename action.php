<!doctype HTML>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<meta language="en-us">
</head>
<body>
<?php
header( "refresh:5;url=http://www.renyou.rf.gd/" );
//$servername = "sql205.epizy.com";
$servername="sql108.epizy.com";
$username = "epiz_32413742";
$password = "GKkDYvqhDI8KHo";
$dbname = "epiz_32413742_customersdb";
$cname=$_POST["cname"];
$cno=$_POST["cno"];
$cityy=$_POST["city"];
$gtypee=$_POST["gtype"];
$rtypee=$_POST["rtype"];
$price=$_POST["pricee"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql statement
$sql="INSERT INTO css VALUES('$cname','$cno','$cityy','$gtypee','$rtypee','$price')";

if ($conn->query($sql) === TRUE) {
    echo "<center><h1 style=background-color:tomato;color:greenyellow;font-size:100px;border-radius:15px;border-width:5px;margin-top:200px;>Registered</h1></center>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>
