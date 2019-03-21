
<?php
Require ('ConnectDB.php');

$project = $_GET['project_name'];
$sql = "INSERT INTO project VALUES (DEFAULT, project)";
$query = mysqli_query($conn, $sql);

if(!$query){
	echo "Error occurred: ". mysqli_error($conn);
}else{
	echo "Project successful";
}
?>