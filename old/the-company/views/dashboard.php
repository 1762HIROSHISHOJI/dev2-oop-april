<?php include 'head.html';
include '../classes/User.php';
session_start();
$user = new User;
$all_users = $user->getAllUser();
?>

<?php include 'navbar.php'; ?>

<main class="row justify-contents-center">
  <div class="col-6">
    <h2 class="text-center"></h2>
  </div>
  <table class="table table-bordered table-hover align-middle">
    <thead>
      <th>ID</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
      <th></th>
    </thead>
    <tbody>
      <?php foreach ($all_users as $user) : ?>

        <tr>
          <td><?= $user['id'] ?></td>
          <td><?= $user['first_name'] ?></td>
          <td><?= $user['last_name'] ?></td>
          <td><?= $user['username'] ?></td>
          <td>
            <form action="../actions/edit.php?id=<?= $user['id'] ?>" method="post" class="d-inline ms-1">
              <button type="submit" class="btn btn-outline-warning">
                <i class="fa-regular fa-pen-to-square"></i>
              </button>
              </a>
              <form action="../actions/delete.php?id=<?= $user['id'] ?>" method="post" class="d-inline ms-1">
                <button type="submit" class="btn btn-outline-danger">
                  <i class="fa-solid fa-trash"></i>
                </button>
              </form>
              </a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</main>

<?php include 'foot.html'; ?>