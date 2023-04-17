<nav class=" navbar navbar-expand navbar-dark bg-light" style="margin-bottom:80px">
    <div class="container">
        <a href="../views/dashboard.php" class="navbar-brand text-black">
        <i class="fa-solid fa-house"></i>
        </a>
    </div>
    <div class="container">
        <span class="text-center text-dark text-bold">Welcome, <?= $_SESSION['fullname'] ?></span><a>
    </div>
    <div class="navbar-nav">
        <form action="../action/logout.php" method="post" class="d-flex ms-2"> 
            <button type="submit" class="btn text-danger bg-transparent border-0">
            <i class="fa-solid fa-right-from-bracket"></i>
            </button>
        </form>
    </div>
</nav>