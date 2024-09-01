<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "unibike";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data for chart 1
$query1 = "SELECT 
              MONTH(waktu_kembali) as month, 
              COUNT(*) as count 
          FROM rents 
          GROUP BY MONTH(waktu_kembali)";
$result1 = $conn->query($query1);
$data1 = array();
while ($row = $result1->fetch_assoc()) {
    $data1[] = array(
        'month' => (int) $row['month'], // cast to int
        'count' => (int) $row['count']  // cast to int
    );
}

// Retrieve data for chart 2
$query2 = "SELECT 
              fakultas, 
              COUNT(*) as count 
          FROM students 
          GROUP BY fakultas";
$result2 = $conn->query($query2);
$data2 = array();
while ($row = $result2->fetch_assoc()) {
    $data2[] = array(
        'fakultas' => $row['fakultas'],
        'count' => (int) $row['count']  // cast to int
    );
}

// Close connection
$conn->close();

// Output data as JSON
header('Content-Type: application/json'); // set JSON header
echo json_encode(
    array(
        'chart1' => $data1,
        'chart2' => $data2
    ), JSON_PRETTY_PRINT); // pretty-print JSON
?>