<!doctype HTML>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<meta language="en-us">
</head>
<body style=background-image:url(bgall.jpeg);background-repeat:no-repeat;background-size:cover;>
<center><h1>Search Results</h1></center>
<br><br><br><br><br><br><br><br><br><br>
<?php
$servername="sql311.epizy.com";
$username = "epiz_29423151";
$password = "kC9ND2Q4rECRy";
$dbname = "epiz_29423151_customersdb";
$cityy=$_POST["city"];
$gtypee=$_POST["gtype"];
$rtypee=$_POST["rtype"];
//$price=$_POST["pricee"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// sql statement
$sql="SELECT * from css WHERE city='$cityy'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo"<h3 style='color:crimson;'><table class='table table-striped'>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>Name: " . $row["name"]. "</td><td> Cno: " . $row["cno"]."</td><br>";
        echo "</tr>";
    }
    echo "</table></h5>";
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>
