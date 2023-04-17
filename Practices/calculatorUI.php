<?php
include 'calculator.php';
$calc = new Calculator;
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
          <h1 class="card-title text-center mb-0 display-5">Calculator with OOP</h1>
        </div>
        <!-- header ends here -->
        <!-- body -->
        <div class="card-body">
          <form action="" method="post">
            <div class="mb-3">
              <label for="num1" class="form-label small fw-bold">Enter first number</label>
              <input type="text" name="num1" id="num1" class="form-control" autofocus required>
            </div>
            <div class="mb-3">
              <label for="num2" class="form-label small fw-bold">Enter second number</label>
              <input type="text" name="num2" id="num2" class="form-control" autofocus required>
            </div>
            <div class="mb-3">
              <input type="radio" name="calc" id="add" value="add">
              <label for="addition" class="form-label">Addition</label>
              <input type="radio" name="calc" id="sub" value="sub">
              <label for="subtraction" class="form-label">Subtraction</label>
              <input type="radio" name="calc" id="multi" value="multi">
              <label for="multiplication" class="form-label">Multiplication</label>
              <input type="radio" name="calc" id="div" value="div">
              <label for="division" class="form-label">Division</label>
            </div>
            <div class="mb-5"></div>
            <button type="submit" name="btn_output" class="btn btn-primary w-100">submit</button>
          </form>
          <?php

          if (isset($_POST['btn_output'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $formula = $_POST['calc'];

            $calc->setCalc($num1, $num2, $formula);

            echo $calc->setFormula($num1, $num2, $formula);


          }
          ?>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>


</html>