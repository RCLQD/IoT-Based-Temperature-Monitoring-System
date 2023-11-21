<?php
require "connection.php";

$sql = "SELECT * FROM mlxdata ORDER BY id DESC LIMIT 10";
$result = $conn->query($sql);

$dataX = array();
$dataY = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        date_default_timezone_set('Asia/Kolkata');
        $dataY[] = $row['temperature'];
        $dateTime = new DateTime($row['created_at']);
        $formattedTime = $dateTime->format('g:i A'); // Format the time
        $dataX[] =  $formattedTime;
    }
}
$conn->close();

echo json_encode(array('dataX' => $dataX, 'dataY' => $dataY));
?>