<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Programming Project</title>
    <link rel="stylesheet" href="styles.css">
    <script src="myscript.js"></script>
</head>
<body>
  <?php
  session_start();
  
  $host = 'localhost'; // e.g., 'localhost'
  $username = 'g728n939';
  $password = 'g728n939';
  $database = 'g728n939';

  // Create a connection
  $conn = new mysqli($host, $username, $password, $database);

  // Check the connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  // Construct the SQL query based on form inputs
  $sql = "SELECT * FROM products WHERE 1=1"; // Initial query

  if (isset($_POST['productName']) && !empty($_POST['productName'])) {
      $productName = $conn->real_escape_string($_POST['productName']);
      $sql .= " AND pname LIKE '%$productName%'";
      $_SESSION["productName"] = $_POST['productName'];
  }else{
    $_SESSION["productName"] = "";
  }

  if (isset($_POST['warehouseCity']) && !empty($_POST['warehouseCity'])) {
      $warehouseCity = $conn->real_escape_string($_POST['warehouseCity']);
      $sql .= " AND city LIKE '%$warehouseCity%'";
      $_SESSION["warehouseCity"] = $_POST['warehouseCity'];
  }else{
    $_SESSION["warehouseCity"] = "";
  }

  if (isset($_POST['minQuantity']) && !empty($_POST['minQuantity'])) {
    $minQuantity = $conn->real_escape_string($_POST['minQuantity']);
    $sql .= " AND quantity >= '$minQuantity'";
    $_SESSION["minQuantity"] = $_POST['minQuantity'];
  }else{
    $_SESSION["minQuantity"] = "";
  }

  if (isset($_POST['maxQuantity']) && !empty($_POST['maxQuantity'])) {
  $maxQuantity = $conn->real_escape_string($_POST['maxQuantity']);
  $sql .= " AND quantity <= '$maxQuantity'";
  $_SESSION["maxQuantity"] = $_POST['maxQuantity'];
  }else{
    $_SESSION["maxQuantity"] = "";
  }

  if (isset($_POST['minPrice']) && !empty($_POST['minPrice'])) {
  $minPrice = $conn->real_escape_string($_POST['minPrice']);
  $sql .= " AND price >= '$minPrice'";
  $_SESSION["minPrice"] = $_POST['minPrice'];
  }else{
    $_SESSION["minPrice"] = "";
  }

  if (isset($_POST['maxPrice']) && !empty($_POST['maxPrice'])) {
    $maxPrice = $conn->real_escape_string($_POST['maxPrice']);
    $sql .= " AND price <= '$maxPrice'";
    $_SESSION["maxPrice"] = $_POST['maxPrice'];
  }else{
    $_SESSION["maxPrice"] = "";
  }
  

  // Issue the query
  $result = $conn->query($sql);

  // Check if the query was successful
  if (!$result) {
    die("Query failed: " . $conn->error);
  }
  ?>

  <div class="box2">
    <h2>Universal Goods</h2>
    <h3>Product Search</h3>
    <div class="table">
      <table>
        <tr>
          <th>ID</th>
          <th>name</th>
          <th>City</th>
          <th>Quantity</th>
          <th>Price</th>
        </tr>
        <?php
        //check if there are rows
        if ($result->num_rows > 0) {
          // Loop through all the rows returned by the query
          while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>{$row['pid']}</td>";
            echo "<td>{$row['pname']}</td>";
            echo "<td>{$row['city']}</td>";
            echo "<td>{$row['quantity']}</td>";
            echo "<td>{$row['price']}</td>";
            echo "</tr>";
          }
        } else {
            echo "No results found.";
        }
        ?>
      </table>
    </div>
    <form action="index.php" method="post">
      <button type="submit">
        Perform Another Search
      </button>
    </form>
  </div>
</body>
</html>
