<?php 

include 'head.html'

?>

<body class="bg-light">
  <div class="" style="height:100vh">
  <div class="row h-100 m-0">
    <div class="card w-25 my-auto mx-auto">
      <div class="card-header bg-white border-0 py-3">
        <h1 class="text-center">Login</h1>
      </div>
      <div class="card-body">
        <form action="../actions/login.php" method="post">
          <div class="mb-3">
            <label for="username" class="form-label"></label>
            <input type="text" name="username" id="username" class="form-control" placeholder="USERNAME">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label"></label>
            <input type="text" name="password" id="password" class="form-control" placeholder="PASSWORD">
          </div>
          <button type="submit" class="btn btn-success w-100">Login</button>
        </form>
        <p class="text-center small mt-3">
          Create an account <a href="register.php">Here</a>
        </p>
      </div>
    </div>
  </div>
</div>
  
</body>



<?php 

include 'foot.html'

?>
