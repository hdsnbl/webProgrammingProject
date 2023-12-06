<?php
// Start the session
session_start()
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
  <div class="box">
    <h2>Universal Goods</h2>
    <h3>Product Search</h3>
    <form action="index2.php" method="post" id="form1">
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
      
      <button type="submit">
        Search Products
      </button>
    </form>
    <form>
      <button type="reset" onclick="clearForm()">
        Clear Form
      </button>
    </form>
  </div>
</body>
</html>
