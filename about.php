<?php
session_start();
include("index.php");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>about</title>
	<style>

		
		h1{
			color: white;
			text-align: center;
			font-size: 72px;
  background: linear-gradient(to right, #30CFD0 0%, #330867 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
		}
		img {
  border-radius: 50%;
  height: 500px;
  width: 500px;
}
.honey
{
	width: 200px;
	height: 200px;
	border-radius: 50%;
	margin-left: 270px;
	margin-top: -200px;
}
.ghee
{
	width: 200px;
	height: 200px;
	border-radius: 50%;
	margin-left: 600px;
	margin-top: -500px;
}
.address
{


  position: absolute;
  bottom: -300px;
  right: 100px;
  font-size: 18px;
  text-decoration-color: ;


}
p{
color: white;
}




	</style>


</head>
<body>

<h1>Dhaka Dairy</h1>
<div>

<img src="pictures/imgr.jpg">


</div>
<div class="honey">
	<img src="pictures/honey.jpg">
</div>
<div class="ghee">
	<img src="pictures/ghee.jpg">
</div>
<div class="address">
	<p>Dhaka Dairy <br> kha 200/c Haji salimuddin lane <br> Merul Badda,Dhaka-1212 <br> Mobile: 0176XXXXXXX</p>
	<a href ="http://www.facebook.com/dhakadairy">Dhaka Dairy</a>

</div>

</body>
</html>