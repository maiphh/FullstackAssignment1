<?php
include_once 'header.php';
include_once (__DIR__.'\includes\functions.inc.php');
$products = readProducts();
 ?>



 <div class="banner">

 </div>

<div class="main-content">

<h1>Products</h1>
<div class="search">

</div>


<div class="product-display">

<?php
foreach($products as $product) {
  displayProduct($product[1],$product[2],$product[3]);
}
 ?>

</div>




</div>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
