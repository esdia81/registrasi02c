<?php
$conn = mysqli_connect ("localhost", "root", "", "peserta");

function query ($query) {
	global $conn;
	$result = mysqli_query ($conn, $query);
	$rows = [];
	while ($data = mysqli_fetch_assoc ($result)) {
		$rows [] = $data; 
	}
	return $rows;
}

?>