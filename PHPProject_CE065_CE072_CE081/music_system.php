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

<?php
$name="Latest Music System";
$price=30000;
?>
<table>
<form action ="final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>" method="POST">
<div class="web">
<tr><td><p> Latest Music System <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/m-1.png " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>Zebronics BT4440RUCF 4.1 Channel Multimedia Speakers<?php  echo "<br/>" ;?>LED Display, Supports USB pen drive and SD/MMC card Built-in FM Blue LED Power indicator,Fully functional remote control, FM frequency scan range: 87 - 108MHz Output power (RMS):20W + 10W x 4, Frequency response:20Hz - 20KHz; FM frequency scan range: 87 - 108MHz; FM storage memory: 40 channels <?php  echo "<br/>" ;?>Sensitivity : 500mV, S/N Ratio : ≥ 72dB, Separation : ≥ 45dB, Subwoofer drive size Remote sensing distance ≥ 6meters. Power consumption : 70W; Input power : AC 230V / 50Hz</lable></td></tr>
</div>
<?php
$name="Speaker";
$price=800;
?>
<div class="web">
<tr><td><p> Speaker<?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/m-2.png " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>Vebeto Mini A10 Wireless Bluetooth Speaker Handsfree Calling Subwoofer Wireless Music Sound Support Micro SD/TF Card Audio Player Wireless Car Laptop Home Outdoor Audio Smartphone Tablet MP3 MP4  <?php  echo "<br/>" ;?>Model Name=Mini A10 Bluetooth <?php  echo "<br/>" ;?>Power Source=DC Brand=VEBETO </lable></td></tr>
</div>
<?php
$name="Double Speaker";
$price=1200;
?>
<div class="web">
<tr><td><p> Double Speaker <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/m-3.png " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>Vermi Big S10 Wireless Bluetooth Speaker Handsfree Calling Subwoofer Wireless Music Sound Support Micro SD/TF Card Audio Player Wireless Car Laptop Home Outdoor Audio Smartphone Tablet MP3 MP4  <?php  echo "<br/>" ;?>Model Name	=Big S10 Bluetooth <?php  echo "<br/>" ;?>Power Source=DC Brand=VERMI </lable></td></tr>
</div>
<?php
$name="Speaker(3)";
$price=18000;
?>
<div class="web">
<tr><td><p> Speaker(3) <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/m-4.png " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>Philips MMS8085B/94 2.1 Channel Convertible Multimedia Speaker System  <?php  echo "<br/>" ;?>USB Direct for easy MP3 music playback and Rich bass. Subwoofer driver : 6.5" <?php  echo "<br/>" ;?>80 W sound output and bluetooth connectivity And Included Accessories : Remote control, User Manual, Warranty Card, 2 RCA to stereo-1 no. cable </lable></td></tr>
</div>
</form>
</form>
</table>
</body>
</html>