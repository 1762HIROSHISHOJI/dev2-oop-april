<?php include 'html/head.html';
include '../classes/Products.php';
session_start();
$product = new Product;
$all_products = $product->getAllProduct();
?>

<?php include 'navbar.php';?>

<body>
    <nav class="navbar">
        <div class="container mt-3">
            <h1>Product List</h1>
            <div class="navbar-nav mr-3">
                <a href="add-product.php" class="btn btn-info text-white">
                    <i class="fa-regular fa-plus">
                        Add Product
                    </i>
                </a>
            </div>
        </div>
    </nav>
    <div class="container mt-3">
        <table class="table table-hover mt-3">
            <thead class="table-dark">
                <th>ID</th>
                <th>PRODUCT NAME</th>
                <th>PRICE</th>
                <th>QUANTITY</th>
                <th><!-- FOR THE ACTION BUTTONS --></th>
                <th><!-- FOR THE BUY BUTTON --></th>
            </thead>
            <tbody>
                <?php
                foreach ($all_products as $product) : ?>
                    <tr>
                        <td><?= $product['id'] ?></td>
                        <td><?= $product['product_name'] ?></td>
                        <td>€<?= $product['price'] ?></td>
                        <td><?= $product['quantity'] ?></td>

                        <td>
                            <a href="edit-product.php?id=<?= $product['id']; ?>" class="btn btn-warning">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>
                            <form action="../actions/delete-product.php?id=<?= $product['id']; ?>" method="post" class="d-inline ms-1">
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </td>
                        <td>
                            <?php if (!$product['quantity'] == 0) : ?>
                                <a href="buy-product.php?id=<?= $product['id']; ?>" class="btn btn-success">
                                    <i class="fa-solid fa-cash-register"></i>
                                </a>
                        </td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

<?php include 'html/foot.html'; ?>