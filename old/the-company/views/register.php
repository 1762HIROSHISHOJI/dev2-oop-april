<?php 

include 'head.html'

?>

<body class="bg-light">
  <div class="" style="height:100vh">
  <div class="row h-100 m-0">
    <div class="card w-25 my-auto mx-auto">
      <div class="card-header bg-white border-0 py-3">
        <h1 class="text-center">Register</h1>
      </div>
      <div class="card-body">
        <form action="../actions/register.php" method="post">
          <div class="mb-3">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" name="first_name" id="first_name" class="form-control" required autofocus>
          </div>
          <div class="mb-3">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" name="last_name" id="last_name" class="form-control" required autofocus>
          </div>
          <div class="mb-3">
            <label for="user_name" class="form-label">Username</label>
            <input type="text" name="username" id="username" class="form-control" required autofocus>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control" required autofocus>
            <div class="form-text">
              Password must be at least 8 characters long
            </div>
          </div>
          <button type="submit" class="btn btn-success w-100">Register</button>
        </form>
        <p class="text-center small mt-3">
          Registered already? <a href="login.php">Login</a>
        </p>

      </div>
    </div>
  </div>
</div>
  
</body>



<?php 

include 'foot.html'

?>
