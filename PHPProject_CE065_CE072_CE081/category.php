<?php
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
$sql = "SELECT id FROM UserInfo";
$result = $conn->query($sql);
$row =$result->fetch_assoc();
$id=$_GET['id'];
?>


<html>
<head><title>Shopping Site for Electronic devices</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style1.css">
<style>
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
</head>
<body>
<ul>
     <li><a href="home.php">Home</a></li>
     <li><a href="AboutUs.php">About Us</a></li>
     <li><a href="help.php?id=<?php  echo $id;?>">Help</a></li>
</ul>

<div class="dropdown">
  <button class="dropbtn">Choose Your Electronic Device:</button>
  <div class="dropdown-content">
    <a href="mobile.php?id=<?php  echo $id;?>">Mobile</a>
    <a href="laptop.php?id=<?php  echo $id;?>">Laptop</a>
    <a href="tv.php?id=<?php  echo $id;?>">Tv</a>
    <a href="headphones.php?id=<?php  echo $id;?>">Headphones</a>
    <a href="refridgerator.php?id=<?php  echo $id;?>">Refridgerator</a>
    <a href="camera.php?id=<?php  echo $id;?>">Camera </a>
    <a href="washing_machine.php?id=<?php  echo $id;?>">Washing_Machine</a>
    <a href="music_system.php?id=<?php  echo $id;?>"> Music_System</a>
    <a href="flaur_machine.php?id=<?php  echo $id;?>">FlourMill_Machine</a>  
  </div>
</div>
</body>
</html>