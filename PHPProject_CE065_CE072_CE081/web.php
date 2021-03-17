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
     <li><a href="cart.php?id=<?php  echo $id;?>">CART</a></li>
     <li><a href="help.php?id=<?php  echo $id;?>">Help</a></li>
     <li><a href="userinfo.php?id=<?php  echo $id;?>">User Info</a></li>
     <li><a href="logout.php">logout</a></li>
</ul>

<table>
<form action ="final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>" method="POST">
<div class="web">

<?php
$name="dell LAPTOP";
$price=7000;
?>
<tr><td><p> DELL LAPTOP <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/dell.jpg " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>The Laptop Intel® Pentium® Gold Processor 7505 Windows 10 Home Single Language <?php  echo "<br/>" ;?>It Has Intel® UHD Graphics with shared graphics memory And  4GB,1x4GB,DDR4,3200MHz And 1TB 5400 rpm 2.5" SATA Hard Drive <?php  echo "<br/>" ;?>It comes with 39.6-cm. display <?php  echo "<br/>" ;?> It have Weight 1.78 kg With Mouse+Laptop Bag Free with it</lable></td></tr>

</div>
<?php
$name="HP LAPTOP";
$price=7000;
?>
<div class="web">
<tr><td><p> HP LAPTOP <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/hp.png " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>The Laptop 10th Generation Intel® Core™ i3-1005G1 Processor and Windows 10 Home Single Language <?php  echo "<br/>" ;?>It has Intel® UHD Graphics with shared graphics memory And 8GB, 8Gx1, DDR4, 2666MHz And 1TB 5400 rpm 2.5" SATA Hard Drive <?php  echo "<br/>" ;?>It comes with 37.6-cm. display <?php  echo "<br/>" ;?> It have Weight 1.84 kg With Mouse+Laptop Bag Free with it</lable></td></tr>
</div>
<?php
$name="APPLE LAPTOP";
$price=75000;
?>
<div class="web">
<tr><td><p> APPLE LAPTOP <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/apple.png " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>The Laptop Comes with 11th Generation Intel® Core™ i3-1115G4 ProcessorWindows 10 Home Single Language <?php  echo "<br/>" ;?> Intel® UHD Graphics with shared graphics memory And 4GB, 4Gx1, DDR4, 2666MHz And 256GB M.2 PCIe NVMe Solid State Drive (Boot) + 1TB 5400 rpm 2.5" SATA Hard Drive (Storage) <?php  echo "<br/>" ;?>It comes with 40.6-cm. display <?php  echo "<br/>" ;?> It have Weight 1.54 kg With 360 degree Rotation and Touchscreen Facality</lable></td></tr>
</div>
<?php
$name="COMPUTER";
$price=5000;
?>
<div class="web">
<tr><td><p> COMPUTER <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/computer.png " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>The Computer comes with Intel® Pentium® Gold G-6400 processor Windows 10 Home Single Language   <?php  echo "<br/>" ;?> Intel UHD Graphics 630 with shared graphics memory and 8GB, 1x8GB, DDR4, 2666MHz and 256GB M.2 PCIe NVMe Solid State Drive + 1TB 7200 rpm 3.5" SATA Hard Drive <?php  echo "<br/>" ;?>It comes with 40.6-cm. desktop <?php  echo "<br/>" ;?>It has 1TB 7200RPM 3.5" SATA HDD</lable></td></tr>
</div>
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
<?php
$name="Basic Flaur Machine";
$price=10000;
?>
<table>
<form action ="final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>" method="POST">
<div class="web">
<tr><td><p> Basic Flaur Machine <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/f-1.jpg " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>color=White And  Brand=Natraj <?php  echo "<br/>" ;?>It retains all Nutrients of Grains like Carbohydrate's, Proteins, Vitamins, and Fibers <?php  echo "<br/>" ;?>The Atta Chakki is fully assembled and ready to use. No Physical Demo and Installation required. Demo CD is provided along with the product </lable></td></tr>
</div>
<?php
$name="Latest Flaur Machine";
$price=18000;
?>
<div class="web">
<tr><td><p> Latest Flaur Machine<?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/f-2.png " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>color=Yellow Brand=Natraj <?php  echo "<br/>" ;?>It retains all Nutrients of Grains like Carbohydrate's, Proteins, Vitamins, and Fibers <?php  echo "<br/>" ;?>The Atta Chakki is fully assembled and ready to use. No Physical Demo and Installation required. Demo CD is provided along with the product </lable></td></tr>
</div>
<?php
$name="White Wired Headphone";
$price=300;
?>
<table>
<form action ="final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>" method="POST">
<div class="web">
<tr><td><p> White Wired Headphone <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/hp-1.png " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>color=White  <?php  echo "<br/>" ;?>Model::JVC - HA-EB75 <?php  echo "<br/>" ;?>Warrenty=1.5 Year </lable></td></tr>
</div>
<?php
$name="Black Headphone";
$price=5000;
?>
<div class="web">
<tr><td><p> Black Headphone <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/hp-2.png " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>color=Black <?php  echo "<br/>" ;?>Model:Sony WH-1000XM4 Industry Leading Wireless  <?php  echo "<br/>" ;?>Noise Cancelling Headphones, Bluetooth Headset with Mic for Phone Calls, 30 Hours Battery Life, Quick Charge, Touch Control & Alexa Voice Control – (Black)</lable></td></tr>
</div>
<?php
$name="White Wired Headphone";
$price=350;
?>
<div class="web">
<tr><td><p> White Wired Headphone <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/hp-3.png " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>color=Black <?php  echo "<br/>" ;?>Model::JBL - Ma-UB75 <?php  echo "<br/>" ;?>Warrenty=2 Year </lable></td></tr>
</div>
<?php
$name="Ear Birds";
$price=5500;
?>
<div class="web">
<tr><td><p> Ear Birds <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/hp-4.png " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>color=Black-Blue <?php  echo "<br/>" ;?>Model:Sony WF-XB700 Truly Wireless Extra Bass Bluetooth Earbuds  <?php  echo "<br/>" ;?>True Wireless Earbuds with Mic for Phone Calls, 18 Hours Battery Life, Quick Charge, BT Ver 5.0 (Blue)</lable></td></tr>
</div>
<?php
$name="Apple Mobile";
$price=99000;
?>
<table>
<form action ="final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>" method="POST">
<div class="web">
<tr><td><p> Apple Mobile <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/mob-1.jpg " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>The phone comes with a 5.71-inch touchscreen display with a resolution of 1312x2560 pixels. <?php  echo "<br/>" ;?>Essential Phone is powered by a 1.9GHz octa-core Qualcomm Snapdragon 835 processor. <?php  echo "<br/>" ;?>It comes with 4GB of RAM.<?php  echo "<br/>" ;?> The Essential Phone runs Android and is powered by a 3040mAh non-removable battery.</lable></td></tr>
</div>
<?php
$name="Samsung Mobile";
$price=22500;
?>
<div class="web">
<tr><td><p> Samsung Mobile<?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/mob-2.jpg " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>The phone comes with a 5.71-inch touchscreen display with a resolution of 1312x2560 pixels. <?php  echo "<br/>" ;?>Essential Phone is powered by a 1.9GHz octa-core Qualcomm Snapdragon 835 processor. <?php  echo "<br/>" ;?>It comes with 4GB of RAM.<?php  echo "<br/>" ;?> The Essential Phone runs Android and is powered by a 3040mAh non-removable battery.</lable></td></tr>
</div>
<?php
$name="Oppo Mobile S3";
$price=24000;
?>
<div class="web">
<tr><td><p> Oppo Mobile S3 <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/mob-3.jpg " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>The phone comes with a 5.71-inch touchscreen display with a resolution of 1312x2560 pixels. <?php  echo "<br/>" ;?>Essential Phone is powered by a 1.9GHz octa-core Qualcomm Snapdragon 835 processor. <?php  echo "<br/>" ;?>It comes with 4GB of RAM.<?php  echo "<br/>" ;?> The Essential Phone runs Android and is powered by a 3040mAh non-removable battery.</lable></td></tr>
</div>
<?php
$name="Vivo Mobile V10";
$price=25000;
?>
<div class="web">
<tr><td><p> Vivo Mobile V10 <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/mob-4.png " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>The phone comes with a 5.71-inch touchscreen display with a resolution of 1312x2560 pixels. <?php  echo "<br/>" ;?>Essential Phone is powered by a 1.9GHz octa-core Qualcomm Snapdragon 835 processor. <?php  echo "<br/>" ;?>It comes with 4GB of RAM.<?php  echo "<br/>" ;?> The Essential Phone runs Android and is powered by a 3040mAh non-removable battery.</lable></td></tr>
</div>
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
<?php
$name="Double Door Fridge";
$price=75000;
?>
<table>
<form action ="final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>" method="POST">
<div class="web">
<tr><td><p> Double Door Fridge <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/r-1.png " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>LG 679 L Frost Free Side-by-Side Refrigerator(GC-B247KQDV.ADSQEBN, Graphite steel, Inverter Compressor)  <?php  echo "<br/>" ;?>Frost Free, Side-by-Side: Auto defrost to stop ice-build up & Capacity 679 L: Suitable for families with 5 or more members <?php  echo "<br/>" ;?>Shelf Type: Toughened Glass & Dimension (mm): Height (Net) 1790; Width (Net) 912; Depth (Net) 717 & Also included in the box: User manual, Warranty card</lable></td></tr>
</div>
<?php
$name="3 Star Godrej Fridge";
$price=25000;
?>
<div class="web">
<tr><td><p> 3 Star Godrej Fridge<?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/r-2.png " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>Whirlpool 190 L 3 Star Direct-Cool Single Door Refrigerator  <?php  echo "<br/>" ;?> Direct Cool Refrigerator, 190 L Upto 9 Hour Cooling Retention during Power Cuts <?php  echo "<br/>" ;?>Stabilizer Free Operation (Range: 130 V - 300 V) Warranty: 1 Year on Product, 10 Years on Compressor</lable></td></tr>
</div>
<?php
$name="7 Star Doble Door Latest Fridge ";
$price=78500;
?>
<div class="web">
<tr><td><p> 7 Star Doble Door Latest Fridge <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/r-3.png " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>Whirlpool 180 L 7 Star Direct-Cool Single Door Refrigerator  <?php  echo "<br/>" ;?> Direct Cool Refrigerator, 160 L Upto 11 Hour Cooling Retention during Power Cuts <?php  echo "<br/>" ;?>Stabilizer Free Operation (Range: 110 V - 290 V) Warranty: 1.5 Year on Product, 15 Years on Compressor</lable></td></tr>
</div>
<?php
$name="5 Star Fridge";
$price=35000;
?>
<div class="web">
<tr><td><p> 5 Star Fridge <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/r-4.png " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>Whirlpool 125 L 3 Star Direct-Cool Single Door Refrigerator  <?php  echo "<br/>" ;?> Direct Cool Refrigerator, 110 L  <?php  echo "<br/>" ;?>Stabilizer Free Operation (Range: 90 V - 270 V) Warranty: 1/2 Year on Product, 2 Years on Compressor</lable></td></tr>
</div>
<?php
$name="LCD Tv";
$price=27000;
?>
<table>
<form action ="final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>" method="POST">
<div class="web">
<tr><td><p> LCD Tv <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/tv-1.png " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>1m 38cm (55") TUE60 4K Smart Crystal UHD TV  <?php  echo "<br/>" ;?> Crystal Processor 4K and Multi Voice Assist  <?php  echo "<br/>" ;?> Warranty: 5 Year on Product</lable></td></tr>
</div>
<?php
$name="Latest 3D Tv";
$price=52000;
?>
<div class="web">
<tr><td><p> Latest 3D Tv<?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/tv-2.png " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>LG 108 cm (43 inches) Full HD LED Smart TV 43LM5650PTA (Ceramic Black) (2020 Model)  <?php  echo "<br/>" ;?> Resolution: Full HD (1920 x 1080) | Refresh Rate: 50 hertz  <?php  echo "<br/>" ;?>Display: Active HDR | Display Type: Flat | BackLight Module: Slim LED</lable></td></tr>
</div>
<?php
$name="LED Tv";
$price=38000;
?>
<div class="web">
<tr><td><p> LED Tv <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/tv-3.png " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>LG 100 cm (40 inches) Full HD LED Smart TV 43LM5650PTA (Ceramic Black) (2017 Model)  <?php  echo "<br/>" ;?> Resolution:  HD (1900 x 1020) | Refresh Rate: 40 hertz  <?php  echo "<br/>" ;?>Display: Active HDR | Display Type: Flat | BackLight Module: Slim LED</lable></td></tr>
</div>
<?php
$name="Basic LCD Tv";
$price=23000;
?>
<div class="web">
<tr><td><p> Basic LCD Tv<?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/tv-4.png " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>LP 90 cm (38 inches) Simple HD LCd Smart TV 43LM5DFGG (Ceramic Brown) (2011 Model)  <?php  echo "<br/>" ;?> Resolution: Simple HD (1920 x 1080) |   <?php  echo "<br/>" ;?>Display: Active Basic | BackLight Module: Slim LCD</lable></td></tr>
</div>
<?php
$name="Simple Basic Washing Machine";
$price=12000;
?>
<table>
<form action ="final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>" method="POST">
<div class="web">
<tr><td><p> Simple Basic Washing Machine<?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/w-1.png " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>Panasonic Econavi 8 Kg 5 Star Built-In Heater Machine  <?php  echo "<br/>" ;?> BEE Rating: 5 Star Rating | More Stars More Savings | Wash Programs: 15  <?php  echo "<br/>" ;?>Also Included in the Box:1 Washer unit, 1 User Manual, 1 Warranty Card and ECONAVI: Energy & Water Saving with Advanced Technology</lable></td></tr>
</div>
<?php
$name="3 Star Washing Machine";
$price=15000;
?>
<div class="web">
<tr><td><p> 3 Star Washing Machine<?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/w-2.png " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>Panasonic Econavi 8 Kg 3 Star Built-In Heater Machine  <?php  echo "<br/>" ;?> BEE Rating: 3 Star Rating  | Wash Programs: 10  <?php  echo "<br/>" ;?>Also Included in the Box:1 Washer unit, 1 User Manual, 1 Warranty Card and ECONAVI: Energy & Water Saving with Advanced Technology</lable></td></tr>
</div>
<?php
$name="5 Star Washing Machine ";
$price=25500;
?>
<div class="web">
<tr><td><p> 5 Star Washing Machine <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/w-3.png " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>Panasonic Econavi 12 Kg 5 Star Built-In Heater Fully-Automatic  Washing Machine (NA-F80V9LRB, Silver, Stain Master+)  <?php  echo "<br/>" ;?> BEE Rating: 5 Star Rating  | Wash Programs: 20  <?php  echo "<br/>" ;?>Built-In Heater with Stain Master+: 60˚C Wash For 99.99% Bacteria Elimination|Intensive Removal of Stains and Germs</lable></td></tr>
</div>
<?php
$name="Latest Techno. Washing Machine";
$price=45000;
?>
<div class="web">
<tr><td><p> Latest Techno. Washing Machine<?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/w-4.png " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>Samsung Econavi 17 Kg 7 Star Built-In Heater Fully-Automatic Top Loading Washing Machine (NA-F80VSDF, Silver, Stain Master+)  <?php  echo "<br/>" ;?> BEE Rating: 7 Star Rating  | Wash Programs: 30  <?php  echo "<br/>" ;?>Built-In Heater with Stain Master+: 65˚C Wash For 99.99% Bacteria Elimination|Intensive Removal of Stains and Germs</lable></td></tr>
</div>
</form>
</form>
</table>
</body>
</html>