<?php
header("Content-Type:application/json");

include('servercon.php');

$stmt = $dbconnect->prepare("SELECT * FROM emp_table");

$stmt->execute();
$result = $stmt->get_result();
$outp = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($outp);

?>