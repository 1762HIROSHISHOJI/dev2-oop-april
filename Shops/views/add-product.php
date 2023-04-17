<?php include 'html/head.html';
include '../classes/Products.php';
session_start();
?>

<?php include 'navbar.php' ?>

<body class="bg-light">
  <div style="height: 100vh;">
    <div class="card w-25 my-auto mx-auto px-0 border-0">
      <div class="card-header text-info bg-light border-0">
        <h1 class="card-title text-center text-info text-bold mb-0 display-6 text-uppercase">
          <i class="fa-solid fa-cart-plus"></i>
          ADD PRODUCT
        </h1>
      </div>
      <div class="card-body border-0 bg-light">
        <form action="../actions/add-product.php" method="post">
          <div class="mb-2">
            <label for="product_name" class="form-label small fw-bold">Product Name</label>
            <input type="text" name="product_name" id="product_name" class="form-control" maxlength="50" autofocus required>
          </div>
          <div class="mb-2">
            <label for="price" class="form-label small fw-bold">Price</label>
            <div class="input-group">
              <div class="input-group-text">
                €
              </div>
              <input type="number" name="price" id="price" class="form-control" required>
            </div>
          </div>
          <div class="mb-4">
            <label for="quantity" class="form-label small fw-bold">Quantity</label>
            <input type="number" name="quantity" id="quantity" class="form-control" max="20" required>
          </div>
          <button type="submit" class="btn btn-info w-100 text-white">ADD</button>
        </form>
      </div>
    </div>
  </div>
  </div>
</body>

<?php include 'html/foot.html' ?>