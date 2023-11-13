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
	 $ex_showroom = $_POST['ex_showroom'];
	 $speed = $_POST['speed'];
	 $mileage = $_POST['mileage'];
	 $cc = $_POST['cc'];

	 $sql_query = "INSERT INTO super_bike (id,brand,model,ex_showroom,speed,mileage,cc)
	 VALUES ('$id','$brand','$model','$ex_showroom','$speed','$mileage','$cc')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo '<script>alert("Bike Data Added Successfully")</script>';
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
<script>
	window.location.href="admin_bikedetails.php";
</script>
