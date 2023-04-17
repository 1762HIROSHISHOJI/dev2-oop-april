<?php
include 'Age.php';
$age  = new Age;
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Welcome to our website</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body class="bg-light">
  <div style="height: 100vh;">
    <div class="row h-100 m-0">
      <div class="card w-25 my-auto mx-auto px-0">
        <div class="card-header text-primary bg-light">
          <h1 class="card-title text-center mb-0 display-5">This is UI-act</h1>
        </div>
        <!-- header ends here -->
        <!-- body -->
        <div class="card-body">
          <form action="" method="post">
            <div class="mb-3">
              <label for="" class="form-label small fw-bold"></label>
              <input type="text" name="fullname" id="fullname" class="form-control" placeholder="FULLNAME" autofocus required>
            </div>
            <div class="mb-3">
              <label for="" class="form-label small fw-bold"></label>
              <input type="text" name="birthyear" id="birthyear" class="form-control" placeholder="BIRTH YEAR" autofocus required>
            </div>
            <div class="mb-3">
              <label for="" class="form-label small fw-bold"></label>
              <input type="text" name="currentyear" id="currentyear" class="form-control" placeholder="CURRENT YEAR" autofocus required>
            </div>
            <div class="mb-5"></div>
            <button type="submit" name="btn_output" class="btn btn-primary w-100">submit</button>
          </form>
          <?php
          
          if (isset($_POST['btn_output'])) {
            $fname = $_POST['fullname'];
            $byear = $_POST['birthyear'];
            $cyear = $_POST['currentyear'];

            echo $age->setProfile($fname, $byear, $cyear);

            echo $age->getName();
            echo "<br>";
            echo "Age is : " . $age->getAge();
          }
          ?>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>


</html>