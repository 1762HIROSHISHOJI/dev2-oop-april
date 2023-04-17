<?php include 'html/head.html';
include '../classes/User.php';
session_start();
$user = new User;
$all_users = $user->getAllUser();
?>

<?php include 'navbar.php';  ?>

<main class="row justify-content-center">
    <div class="col-6">
        <h2 class="text-center">
            USER LIST
        </h2>
        <table class="table table-bordered table-hover align-middle">
            <thead>
                <th></th>
                <th>ID</th>
                <th>FIRST NAME</th>
                <th>LAST NAME</th>
                <th>USERNAME</th>
                <th></th>
            </thead>
            <tbody>
                <?php foreach ($all_users as $user) : ?>
                    <tr>
                        <td></td>
                        <td><?= $user['id']  ?></td>
                        <td><?= $user['first_name']  ?></td>
                        <td><?= $user['last_name']  ?></td>
                        <td><?= $user['username']  ?></td>
                        <td>
                            <?php if($user['id'] == $_SESSION['id'] ): ?>
                                <a href="edit-user.php" class="btn btn-outline-warning">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </a>

                                <form action="../actions/delete-user.php" method="post" class="d-inline ms-1">
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            <?php endif; ?>
                        </td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</main>




<?php include 'html/foot.html'; ?>