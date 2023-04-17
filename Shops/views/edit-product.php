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
                <h1 class="card-title text-center text-warning text-bold mb-0 display-6 text-uppercase">
                    <i class="fa-solid fa-pen-to-square"></i>
                    Edit Products
                </h1>
            </div>
            <div class="card-body border-0 bg-light">
                <form action="../actions/edit-product.php?id=<?= $product_data['id']; ?>" method="post">
                    <div class="mb-2">
                        <label for="product_name" class="form-label small fw-bold">Product Name</label>
                        <input type="text" name="product_name" id="product_name" class="form-control" value="<?= $product_data['product_name'] ?>" maxlength="20" required>
                    </div>
                    <div class="row">
                        <div class="col mb-2">
                            <label for="price" class="form-label small fw-bold">Price</label>
                            <div class="input-group">
                                <div class="input-group-text">
                                    €
                                </div>
                                <input type="number" name="price" id="price" class="form-control" value="<?= $product_data['price'] ?>" maxlength="50" autofocus required>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <label for="quantity" class="form-label small fw-bold">Quantity</label>
                            <input type="number" name="quantity" id="quantity" class="form-control" value="<?= $product_data['quantity'] ?>" maxlength="50" autofocus required>
                        </div>
                        <button type="submit" name="btn_update" class="btn btn-warning w-100">Edit</button>
                </form>
            </div>
        </div>
    </div>
</body>

<?php include 'html/foot.html' ?>