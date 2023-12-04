

<?php
$host = 'localhost'; // e.g., 'localhost'
$username = 'g728n939';
$password = 'g728n939';
$database = 'products';

// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM products"; 

// Issue the query
$result = $mysqli->query($sql);

// Loop through all the rows returned by the query
while ($row = $result->fetch_row()) {
   echo "<p>$result</p>\n";
}

echo "Connected successfully";

// Close the connection
$conn->close();
?>




