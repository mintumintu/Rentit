<!DOCTYPE html>
<html>
<head>
<title>Welcome to RentYou</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<meta language="en-us">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style='background-image:url("bgall.png");background-repeat:no-repeat;background-size:cover;'>
<center><h1>RentYou</h1></center>
<div class="container">
<div class="row">
<div class="col-sm-12">
<form action="searchresult.php" method="post"><center>
<div class="input-group">
<span class="badge badge-pill badge-info" style="font-size:2em;">Search<span>
</div></center>
<br>
<div class="input-group">
<span class="input-group-addon">City</span>
<select class="form-control" id="formcity" name="city">
<option value="bhawanipatna">Bhawanipatna</option>
<option value="junagarh">Junagarh</option>
<option value="kesinga">Kesinga</option>
</select>
</div>
<br>
<div class="input-group">
<span class="input-group-addon">For</span>
<select class="form-control" id="type" name="gtype">
<option value="family">Family</option>
<option value="bachelor">Bachelor</option>
<option value="hostel">Hostel</option>
<option value="paying_guest">Paying Guest</option>
</select>
</div>
<br>
<div class="input-group">
<span class="input-group-addon">Type</span>
<select class="form-control" id="type2" name="rtype">
<option value="1bhk">1BHK</option>
<option value="2bhk">2BHK</option>
<option value="bunglow">Bunglow</option>
</select>
</div>
<br>
<!--
<div class="input-group">
<span class="input-group-addon">Price</span>
<select class="form-control" id="price" name="pricee">
<option value="0">High-Low</option>
<option value="1">Low-High</option>
</select>
</div>-->
<br>
<!----Do not touch this area -->
<button type="submit" class="btn btn-success btn-block">Search</button>
</div>
<br><br><br><br><br><br>
<center><a href="register.html"><h1>Register your property</h1></a></center>
</body>
</html>
