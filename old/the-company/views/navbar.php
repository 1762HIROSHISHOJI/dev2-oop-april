<nav class=" navbar navbar-expand navbar-dark bg-dark" style="margin-bottom:80px">
    <div class="container">
        <a href="" class="navbar-brand">
            <h1>The Company</h1>
        </a>
    </div>
    <div class="navbar-nav">
        <span class="navbar-text"><?= $_SESSION['fullname'] ?></span>
        <form action="../actions/logout.php" method='post' class="d-flex ms-1">
            <button type="submit" class="btn text-danger bg-transparent border-0">Logout</button>
        </form>
    </div>
</nav>