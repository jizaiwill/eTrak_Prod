 <?php
$servername = "localhost";
$username ="EtrakDatabase";
$password ="harekuxe";
$dbName ="Etrak Database";


//create connection
$conn = new mysqli($servername, $username, $password, $dbName);

//check connection

//if we dont connect
if(mysqli_connect_errno())
{
	echo "Failed to connect" . mysqli_connect_error();
}

//if we connect
if(mysqli_ping($conn))
{
	echo "The Team View php file is working thank goodness!!";
}
else
{
	echo "Error: " . mysqli_error($conn);
}
$sql = "select `Tool Name`From Toolshed Where `Zone` = 1";
 $result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br>  ". $row["Tool Name"];
    }
} else {
    echo "keep trying brutha!";
}





mysqli_close($conn);

