<?php
include 'School.php';
$school = new School;
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tuition Page</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
  <div class="container bg-light">
    <div class="row h-100 m-0">
      <div class="card w-50 my-auto mx-auto px-0">
        <div class="card-header text-black">
          <div class="card-title text-center mb-0">
            Tuition Calculator
          </div>
          <div class="card-body">
            <form action="" method="post">
              <div class="mb-3">
                <label for="full_name" class="form-label small fw-bold"></label>
                <input type="text" name="fname" id="fname" class="form-control" placeholder="Enter FullName" autofocus required>
              </div>
              <div class="mb-5">
                <label for="Unit_Number" class="form-label small fw-bold"></label>
                <input type="text" name="unum" id="unum" class="form-control" placeholder="Enter Number of Units" max="23" autofocus required>
              </div>
              <div class="mb-3">
                <select name="ylevel" id="year_level" class="form-select">
                  <option class="text-uppercase" hidden>Chose Your Current Year Level</option>
                  <option value="1">First Year</option>
                  <option value="2">Second Year</option>
                  <option value="3">Third Year</option>
                  <option value="4">Fourth Year</option>
                </select>
              </div>
              <div class="mb-3">
                <p class="text-uppercase">Are you using the computer laboratory?</p>
                <input type="radio" name="lab_choice" id="yes" value="yes">
                <label for="yes" class="form-label">Yes</label>
                <input type="radio" name="lab_choice" id="no" value="no">
                <label for="no" class="form-label">No</label>
              </div>
              <div class="mb-3"></div>
              <button type="submit" name="btn" class="btn btn-outline-success">Calculate Fee</button>
            </form>
          </div>
        </div>
      </div>
      <?php
      if (isset($_POST['btn'])) {
        $fname = $_POST['fname'];
        $unum = $_POST['unum'];
        $ylevel = $_POST['ylevel'];
        $lchoice = $_POST['lab_choice'];

        $school->setName($fname);
        $school->setUnum($unum);
        $school->setYlevel($ylevel);
        $school->setLchoice($lchoice);

      echo '<div class="container w-100 bg-light mt-3">
        <h3 class="text-center text-uppercase">Receipt</h3>
        <table class="table table-hover mt-3">
          <thead class="table-dark text-uppercase">
            <th>Fullname</th>
            <th>Units Count</th>
            <th>Year Level</th>
            <th>Total Unit Price</th>
            <th>Lab Price</th>
          </thead>
          <tbody>
            <tr>
              <td>"<?= echo $school->getName()?>"</td>
              <td>"<?php echo $school->getUnum()?>"</td>
              <td>"<?php echo $school->getYlevel()?>"</td>
              <td>"<?php echo $school->getUprice()?>"</td>
              <td>"<?php echo $school->getLprice()?>"</td>
              </tr>
            <tr>
              <td></td>
              <td>Total Tuition:</td>
              <td></td>
              <td>"<?php echo $school->getTuition()?>"</td>
              <td></td>
            </tr>
          </tbody>'
          ;
      }?>
    </div>
  </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>