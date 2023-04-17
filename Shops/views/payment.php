<?php include 'html/head.html';
include '../classes/Products.php';
session_start();
$id = $_GET['id'];
$product = new Product;
$product_data = $product->getProduct($id);
?>

<?php include 'navbar.php' ?>

<body class="bg-light">
    <div class="row h-100 m-0">
        <div class="card w-25 my-auto mx-auto px-0 border-0">
            <div class="card-header text-success bg-light border-0">
                <h1 class="card-title text-center text-success text-bold mb-0 display-6 text-uppercase">
                    <i class="fa-solid fa-cash-register"></i>
                    Payment
                </h1>
            </div>
            <div class="card-body border-0 bg-light">
                <form action="../views/buy-product.php?id=<?= $product_data['id']; ?>" method="post">
                    <div class="mb-2">
                        <label for="product_name" class="form-label small fw-bold">Product Name</label>
                        <span class="h3 text-bold"><?= $product_data['product_name'] ?></span>
                    </div>
                    <div class="row">
                        <div class="col mb-2">
                            <label for="price" class="form-label small fw-bold">Total Price</label>
                            <p class="h3 text-bold">€<?= $product_data['price'] * $_POST['buy_quantity']?></p>
                        </div>
                        <div class="col mb-2">
                            <label for="stock" class="form-label small fw-bold">Buy Quantity<span class="form-label small text-danger">*</span></label>
                            <p class="h3 text-bold"><?= $_POST['buy_quantity'] ?></p>
                            <span class="small text-danger">at least 1</span>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="buy_quantity" class="form-label small fw-bold">Payment</label>
                        <div class="input-group">
                            <div class="input-group-text">
                                €
                            </div>
                            <input type="number" name="buy_quantity" id="buy_quantity" class="form-control" maxlength="50" autofocus required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success w-100">PAY</button>
                </form>
            </div>
        </div>
    </div>
</body>

<?php include 'html/foot.html' ?>