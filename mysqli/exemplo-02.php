<?php

$conn = new mysqli("127.0.0.1", "root", "", "banco_1");

if ($conn->connect_error) {
	echo "Error ".$conn->connect_error;
}

$result = $conn->query("SELECT * FROM usuarios1 ORDER BY nome");

$data = array();

while ($row = $result->fetch_array(MYSQLI_ASSOC)){

	array_push($data, $row);

}
echo json_encode($data);
?>