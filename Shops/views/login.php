<?php include 'html/head.html' ?>

<body class="bg-light">
    <div style="height: 100vh;">
        <div class="row h-100 m-0">
            <div class="card w-25 my-auto mx-auto px-0 border-0">
                <div class="card-header text-primary bg-light border-0">
                    <h1 class="card-title text-center mb-0 display-3 text-bold text-uppercase">Login
                    <i class="fa-solid fa-right-to-bracket"></i>
                    </h1>
                </div>
                <div class="card-body bg-light border-0">
                    <form action="../actions/login.php" method="post">
                        <div class="mb-3">
                            <label for="" class="form-label small fw-bold">Username</label>
                            <input type="text" name="username" id="username" class="form-control" Placeholder="Username" autofocus required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label small fw-bold">Password</label>
                            <input type="password" name="password" id="password" class="form-control" Placeholder="Password" autofocus required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>
                    <div class="text-center mt-3">
                    <a href="registration.php"><button type="button" class="btn btn-danger align-center">Create an Account</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<?php include 'html/foot.html' ?>