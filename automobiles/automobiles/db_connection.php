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
if(isset($_POST['save']))
{	
	 $id = $_POST['id'];
	 $brand = $_POST['brand'];
	 $model = $_POST['model'];
	 $exshowroom = $_POST['exshowroom'];
	 $speed = $_POST['speed'];
	 $rating = $_POST['rating'];
	 $fuel = $_POST['fuel'];

	 $sql_query = "INSERT INTO lux_car (id,brand,model,exshowroom,speed,rating,fuel)
	 VALUES ('$id','$brand','$model','$exshowroom','$speed','$rating','$fuel')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo '<script>alert("Car Data Added Successfully")</script>';
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
<script>
	window.location.href="admin_cardetails.php";
</script>
