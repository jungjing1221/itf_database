<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'natthawalee.mysql.database.azure.com', 'natthawalee@natthawalee', 'Jungjing2184', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$strid = $_GET["id"];
	$sql = "DELETE FROM guestbook WHERE id = '".$strid."' ";

	$query = mysqli_query($conn,$sql);

	if(mysqli_affected_rows($conn)) {
		header('Location:show.php');
	}else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  } else {
    echo "Error updating record: " . $conn->error;
  }



mysqli_close($conn);
?>
