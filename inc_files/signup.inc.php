<?php

if (isset($_POST['submit'])) {
  $name = $_POST['fullname'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $pwd = $_POST['pwd'];
  $rpwd = $_POST['rpwd'];

  require_once "dbh.inc.php";
  require_once "functions.inc.php";

  if (empty_input_signup($name, $email, $username, $pwd, $rpwd) !== false) {
    header("location: ../main_files/signup?error=emptyinput");
    exit();
  }

  if (invalid_uid($username) !== false) {
    header("location: ../main_files/signup?error=invailduid");
    exit();
  }

  if (invalid_email($email) !== false) {
    header("location: ../main_files/signup?error=invaildemail");
    exit();
  }

  if (pwd_match($pwd, $rpwd) !== false) {
    header("location: ../main_files/signup?error=pwdsdontmatch");
    exit();
  }

  if (uid_exists($conn, $username, $email) !== false) {
    header("location: ../main_files/signup?error=takenuid");
    exit();
  }

  create_user($conn, $name, $email, $username, $pwd);

} else {
  header("location: ../main_files/signup");
  exit();
}


