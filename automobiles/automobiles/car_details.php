<html>
<head>
<title>Display Records</title>
<link rel="stylesheet" href="style2.css">
</head>
<body>
<section id="header">
      <div class="header container">
        <div class="nav-bar">
          <div class="brand">
            <a href="#hero">
              <h1><span>Luxury Cars</span></h1>
            </a>
          </div>
          <div class="nav-list">
            <div class="hamburger">
              <div class="bar"></div>
            </div>
            <ul>
              <li><a href="luxurycars.html" data-after="Home">Back</a></li>
              <li><a href="logout.php" data-after="Contact">Logout</a></li>            
            </ul>
          </div>
        </div>
      </div>
    </section>

<section id="table">
	<div class="login-box">
	<table  cellspacing="7">
		<tr>
			<th><h1>Id</h1></th>
			<th><h1>Brand</h1></th>
			<th><h1>Model</h1></th>
			<th><h1>Price</h1></th>
			<th><h1>Speed</h1></th>
			<th><h1>Rating</h1></th>
			<th><h1>Fuel</h1></th>
			</tr>
<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="car";
$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}
$query="SELECT * FROM lux_car";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total!=0)
{
	while($result=mysqli_fetch_assoc($data))
	{
		echo"
		<tr>
		<td><h2>".$result['id']."</h2></td>
		<td><h2>".$result['brand']."</h2></td>
		<td><h2>".$result['model']."</h2></td>
		<td><h2>".$result['exshowroom']."</h2></td>
		<td><h2>".$result['speed']."</h2></td>
		<td><h2>".$result['rating']."</h2></td>
		<td><h2>".$result['fuel']."</h2></td>
		</tr>
		";
	}
}
else{
	header("Location:error2.php");
	}
?>
</section>
</table>
</div>
</body>
</html>