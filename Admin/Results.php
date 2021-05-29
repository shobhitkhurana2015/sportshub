<?php
$servername = "localhost";
$username = 'root';
$password = '';
$dbname = "sporthub";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/style.css">

</head>
<body>

<header style="text-align: center;">
	<img src="../Student/img/sports-reboot-promo-still-facebookJumbo.jpg" width="100px" height="80px">
	<h1 class="liketext">Sport Hub
<a href ="../index.php"> <input type="button" value="Logout" style="float:right;"></a></h1>
</header>
<div class="row">
<nav>
		<div class="menu-icon">
			
		</div>
		<ul>
			<li><a href="Add Events.html">Add Events</a></li>
			<li><a href="Edit Events.php">Edit Events</a></li>
			<li><a href="Reports.php">Reports</a></li>
			<li><a href="#" style="color:red;">Results</a></li>
		
			
		</ul>
	</nav>
               
<div class="col-12">
<div style="width:100%;border-style:solid; border-radius:10px;text-align:center;border-color:#0000ff">
  <h1>Result</h1>                          
 <form action="result_update.php" method="post">
Event name:
<select name="ename" required class="smalltext">
<?php


$sql = "SELECT * FROM event where status='ongoing'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
 
    while($row = $result->fetch_assoc()) {
		
        echo '<option value="'.$row["event_name"].'">'.$row["event_name"].'</option>';
    }
} else {
    echo "0 results";
}

?>

</select>
<br><br>
  1st prize:                                                                       
<input type="text" name="1st" required class="bigtext"><br><br>
  2nd prize :  
<input type="text" name="2nd" required class="bigtext"><br><br>
  3rd prize :  
<input type="text" name="3rd" required class="bigtext"><br><br>
<input type="submit" value="Submit">
</form>


</div>
<center>
<img src="https://t4.ftcdn.net/jpg/01/08/89/47/240_F_108894716_XTAQTSuU1B1kmM7w9CqL0wEJI7TjAOXY.jpg" width="40%;">

</div>


</div>

<footer>
<p>Copyright 2021-2050 by Shobhit. All Rights Reserved.</p>
</footer>

</body>
</html>