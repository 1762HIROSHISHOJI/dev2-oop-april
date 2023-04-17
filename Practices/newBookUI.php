<?php
include 'Book.php';
$book = new Book;
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>London Tube Fare</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
  <form action="" method="post">
      <input type="number" name="row_num" id="row_num" class="" autofocus required>
    </div>
    <button type="submit" name="btn" class="">submit</button>
  </form>
  <?php

  if (isset($_POST['btn'])) {
    $r_num = $_POST['row_num'];

    $book -> setR_num($r_num);
    echo $book -> getRows();
  }

  if (isset($_POST['btn_submit'])) {
    $author = $_POST['author'];
    $title = $_POST['title'];

    $book -> setTitle($title);
    $book -> setAuthor($author);

    echo "The Author is ; ".$book -> getAuthor();
    echo "The Title is ; ".$book -> getTitle();



  }

  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>


</html>