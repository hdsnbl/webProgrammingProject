function clearForm() {
  document.getElementById("productName").value = "";
  document.getElementById("warehouseCity").value = "";
  document.getElementById("minQuantity").value = "";
  document.getElementById("maxQuantity").value = "";
  document.getElementById("minPrice").value = "";
  document.getElementById("maxPrice").value = "";
  var xhr = new XMLHttpRequest();
  xhr.onload = function() {
      document.location = 'index3.php';
  }
  xhr.open('GET', 'index3.php', true);
  xhr.send();
}
