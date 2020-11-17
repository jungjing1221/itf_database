<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'keddb.mysql.database.azure.com', 'kedmanee@keddb', '1652545-praew', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$strid = $_GET["id"];
	$sql = "DELETE FROM guestbook WHERE id = '".$strid."' ";

	$query = mysqli_query($conn,$sql);

	if(mysqli_affected_rows($conn)) {
		header('Location:show.php');
	}



mysqli_close($conn);
?>