<!DOCTYPE html>
<html>
<body>

<?php

$con = mysqli_connect("localhost","EtrakDatabase","harekuxe","Etrak Database");

//if we dont connect
if(mysqli_connect_errno())
{
	echo "Failed to connect" . mysqli_connect_error();
}

//if we connect
if(mysqli_ping($con))
{
	echo "Connection Ok!!!";
}
else
{
	echo "Error: " . mysqli_error($con);
}


mysqli_close($con);

?>

</body>
</html>