<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="car";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
//if(!$conn)
//{
//	die("Connection Failed:" . mysqli_connect_error());
//}
if(isset($_POST['delete']))
{
    $id=$_POST['id'];
    $query="DELETE FROM super_bike WHERE id='$id'";
    $query_run=mysqli_query($conn,$query);
    if($query_run)
    {
        echo '<script>alert("Bike Data Deleted Successfully")</script>';
    }
    else{
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
}
?>
<script>
	window.location.href="admin_bikedetails.php";
</script>