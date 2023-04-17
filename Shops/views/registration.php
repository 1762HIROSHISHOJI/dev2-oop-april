<?php include 'html/head.html' ?>

<body class="bg-light">
    <div style="height: 100vh;">
        <div class="row h-100 m-0">
            <div class="card w-25 my-auto mx-auto px-0 border-0">
                <div class="card-header text-success bg-light border-0">
                    <h1 class="card-title text-center text-danger text-bold mb-0 display-6 text-uppercase">
                        <i class="fa-solid fa-user-plus"></i>
                        Registration</h1>
                </div>
                <div class="card-body border-0 bg-light">
                    <form action="../actions/registration.php" method="post">
                        <div class="row">
                        <div class="col mb-2">
                            <label for="first_name" class="form-label small fw-bold">First Name</label>
                            <input type="text" name="first_name" id="first_name" class="form-control" maxlength="50" autofocus required>
                        </div>
                        <div class="col mb-2">
                            <label for="last_name" class="form-label small fw-bold">Last Name</label>
                            <input type="text" name="last_name" id="last_name" class="form-control" maxlength="50" autofocus required>
                        </div>
                        <div class="mb-2">
                            <label for="Username" class="form-label small fw-bold">Username</label>
                            <input type="text" name="username" id="username" class="form-control" maxlength="20" required>
                        </div>
                        <div class="mb-4">
                            <label for="Password" class="form-label small fw-bold">Password</label>
                            <input type="password" name="password" id="password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-danger w-100">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>



<?php include 'html/foot.html' ?>