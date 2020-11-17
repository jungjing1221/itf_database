<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'natthawalee.mysql.database.azure.com', 'natthawalee@natthawalee', 'Jungjing2184', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$strid = $_POST["id"];
$strname = $_POST["name"];
$strcomment = $_POST["comment"];
$strlink = $_POST["link"];
$sql = "UPDATE guestbook SET name ='".$strname."',comment ='".$strcomment."',link ='".$strlink."'WHERE id ='".$strid."'";
$query = mysqli_query($conn,$sql);

if ($conn->query($sql) === TRUE) {
    header('Location:show.php');
  } else {
    echo "Error updating record: " . $conn->error;
  }
mysqli_close($conn);
?>