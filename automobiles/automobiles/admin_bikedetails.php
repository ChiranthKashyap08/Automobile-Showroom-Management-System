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
              <h1><span>Super Bikes</span></h1>
            </a>
          </div>
          <div class="nav-list">
            <div class="hamburger">
              <div class="bar"></div>
            </div>
            <ul>
			<li><a href="add_bike.php" data-after="Add">Add</a></li> 
			<li><a href="search_bike.php" data-after="Delete">Delete</a></li> 
              <li><a href="admin_superbikes.html" data-after="Home">Back</a></li>
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
			<th><h1>Mileage</h1></th>
			<th><h1>CC</h1></th>
            
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
$query="SELECT * FROM super_bike";
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
		<td><h2>".$result['ex_showroom']."</h2></td>
		<td><h2>".$result['speed']."</h2></td>
		<td><h2>".$result['mileage']."</h2></td>
		<td><h2>".$result['cc']."</h2></td>
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