<?php
include 'Database.php';

class User extends Database
{

  public function store($request)
  {
    $firstname = $request['first_name'];
    $lastname = $request['last_name'];
    $username = $request['username'];
    $password = $request['password'];

    $password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (first_name,last_name,username,password)VALUES('$firstname','$lastname','$username','$password')";

    if ($this->conn->query($sql)) {
      header('location:../views/dashboard.php');
    } else {
      die('Error creating user ' . $this->conn->error);
    }
  }
  public function login($request)
  {
    $username = $request['username'];
    $password = $request['password'];

    $sql = "SELECT * FROM users WHERE username = '$username'";

    $result = $this->conn->query($sql);

    if ($result->num_rows == 1) {
      $user = $result->fetch_assoc();

      if (password_verify($password, $user['password'])) {
        session_start();
        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['fullname'] = $user['first_name'] . " " . $user['last_name'];

        header('location: ../views/dashboard.php');
        exit;
      } else {
        die('ERROR: password do not match');
      }
    } else {
      die('ERROR: username not found');
    }
  }
  public function logout()
  {
    session_start();
    session_unset();
    session_destroy();

    header('location: ../views/login.php');
    exit;
  }

  public function getAllUser()
  {
    $sql = "SELECT * FROM users";
    if ($result = $this->conn->query($sql)) {
      return $result;
    } else {
      die('Error retrieving the data' . $this->conn->error);
    }
  }

  public function deleteUser($request)
  {
    $userid = $request['id'];

    $sql = "DELETE FROM users WHERE id = $userid";

    if ($this->conn->query($sql)) {

      session_start();
      session_unset();
      session_destroy();

      header("location: login.php");
      exit;
    } else {
      die("Error in updating data" . $this->conn->error);
    }
  }
}
