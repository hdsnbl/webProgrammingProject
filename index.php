<?php
// Start the session
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Set session variables based on form inputs
    $_SESSION["productName"] = isset($_POST["productName"]) ? $_POST["productName"] : null;
    $_SESSION["warehouseCity"] = isset($_POST["warehouseCity"]) ? $_POST["warehouseCity"] : null;
    $_SESSION["minQuantity"] = isset($_POST["minQuantity"]) ? $_POST["minQuantity"] : null;
    $_SESSION["maxQuantity"] = isset($_POST["maxQuantity"]) ? $_POST["maxQuantity"] : null;
    $_SESSION["minPrice"] = isset($_POST["minPrice"]) ? $_POST["minPrice"] : null;
    $_SESSION["maxPrice"] = isset($_POST["maxPrice"]) ? $_POST["maxPrice"] : null;
} else {
    // Initialize session variables if not set
    $_SESSION["productName"] = isset($_SESSION["productName"]) ? $_SESSION["productName"] : null;
    $_SESSION["warehouseCity"] = isset($_SESSION["warehouseCity"]) ? $_SESSION["warehouseCity"] : null;
    $_SESSION["minQuantity"] = isset($_SESSION["minQuantity"]) ? $_SESSION["minQuantity"] : null;
    $_SESSION["maxQuantity"] = isset($_SESSION["maxQuantity"]) ? $_SESSION["maxQuantity"] : null;
    $_SESSION["minPrice"] = isset($_SESSION["minPrice"]) ? $_SESSION["minPrice"] : null;
    $_SESSION["maxPrice"] = isset($_SESSION["maxPrice"]) ? $_SESSION["maxPrice"] : null;
}
?>

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
  echo $_SESSION["productName"];
  echo $_SESSION["warehouseCity"];
  echo $_SESSION["minQuantity"];
  echo $_SESSION["maxQuantity"];
  echo $_SESSION["minPrice"];
  echo $_SESSION["maxPrice"];
  ?>
  <div class="box">
    <h2>Universal Goods</h2>
    <h3>Product Search</h3>
    <form action="index2.php" method="post" >
      <label for="productName">Product Name:</label>
      <input type="text" id="productName" name="productName" value="<?php echo $_SESSION["productName"]; ?>"><br>

      <label for="warehouseCity">Warehouse City:</label>
      <input type="text" id="warehouseCity" name="warehouseCity" value="<?php echo $_SESSION["warehouseCity"]; ?>"><br>

      <label for="minQuantity">Minimum Quantity:</label>
      <input type="number" id="minQuantity" name="minQuantity" step="1" value="<?php echo $_SESSION["minQuantity"]; ?>"><br>

      <label for="maxQuantity">Maximum Quantity:</label>
      <input type="number" id="maxQuantity" name="maxQuantity" step="1" value="<?php echo $_SESSION["maxQuantity"]; ?>"><br>
      
      <label for="minPrice">Minimum Price:</label>
      <input type="number" id="minPrice" name="minPrice" step="0.01" value="<?php echo $_SESSION["minPrice"]; ?>"><br>

      <label for="maxPrice">Maximum Price:</label>
      <input type="number" id="maxPrice" name="maxPrice" step="0.01" value="<?php echo $_SESSION["maxPrice"]; ?>"><br>

      <button type="reset" onclick="clearForm()">
        Clear Form
      </button>
      <button type="submit">
        Search Products
      </button>
  </form>
  </div>
    

</body>
</html>
