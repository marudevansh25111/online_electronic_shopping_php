<?php
session_start();
if(!$_SESSION['project'])
{
  header('location:login.php');
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$id=$_GET['id'];

?>
<html>
<head><title>Shopping Site</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style1.css">
</head>
<body>
<ul>
     <li><a href="home.php">Home</a></li>
     <li><a href="AboutUs.php">About Us</a></li>
     <li><a href="category.php?id=<?php  echo $id;?>">choose category</a></li>
     <li><a href="help.php?id=<?php  echo $id;?>">Help</a></li>
     <li><a href="userinfo.php?id=<?php  echo $id;?>">User Info</a></li>
     <li><a href="logout.php">logout</a></li>
</ul>


<table>
<form action ="final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>" method="POST">
<div class="web">
<?php
$name="video camera";
$price=10000;
?>
<table>
<form action ="final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>" method="POST">
<div class="web">
<tr><td><p> Video Camera <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/c-1.png " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>Size: Camcorder Model Name-HDRCX405 & Brand-Sony <?php  echo "<br/>" ;?>Video Capture Resolution:-1920 x 1080 & Connectivity Technology:-USB <?php  echo "<br/>" ;?>Lens Type=Carl Zeiss Vario Tessar<?php  echo "<br/>" ;?>latest Feature:- 26.8mm wide angle ZEISS Lens. Minimum focus distance- approx. 1 cm Wide), approx. 80 cm (Tele), approx. 0.40 (Wide), approx. 31.5 (Tele)</lable></td></tr>
</div>
<?php
$name="Simple Camera";
$price=2500;
?>
<div class="web">
<tr><td><p> Simple Camera <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/c-2.png " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>Size: Camcorder Model Name-Panasonic Lumix G100 4K Mirrorless Vlogging Camera (Black)  Brand-Panasonic <?php  echo "<br/>" ;?>photo Capture Resolution-1720 x 880 Connectivity Technology-USB <?php  echo "<br/>" ;?>Lens Type=12-32mm Lens, Micro Four Thirds Sensor.<?php  echo "<br/>" ;?>latest Feature:- 3" Free-angle LCD - Perfect for vlogging, allowing you to see exactly what you are capturing</lable></td></tr>
</div>
<?php
$name="Latest Video Camera";
$price=35000;
?>
<div class="web">
<tr><td><p> Latest Video Camera <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/c-3.png " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>Ultra HD 4K Video at 30 fps/20MP Stills <?php  echo "<br/>" ;?>BIONZ X Processor and Zeiss Vario-Sonnar T* Lens <?php  echo "<br/>" ;?>1" Exmor R CMOS Sensor<?php  echo "<br/>" ;?>The black Sony FDR-AX100 Full HD Camcorder brings Ultra HD 4K video to the palm of your hand, delivering resolution four times that of Full HD. </lable></td></tr>
</div>
<?php
$name="5 Star Camera";
$price=25000;
?>
<div class="web">
<tr><td><p> 5 Star Camera <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/c-4.png " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>UHD 4K Output up to 60 fps <?php  echo "<br/>" ;?>Dual-Pixel CMOS Autofocus Feature and Integrated 15x Optical Zoom Lens <?php  echo "<br/>" ;?>8.29MP, 1" CMOS Sensor<?php  echo "<br/>" ;?>This camcorder packs several pro-style features into its compact form, including Dual-Pixel Autofocus (DPAF). </lable></td></tr>
</div>
</form>
</form>
</table>
</body>
</html>