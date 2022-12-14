<?php

function empty_input_signup(...$inputs) {
  $result = false;
  for ($i = 0; $i < count($inputs); $i++) {
    if (empty($inputs[$i])) {
      $result = true;
      break;
    }
  }
  return $result;
}

function invalid_uid($username) {
  $result;
  if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    $result = true;
  }else {
    $result = false;
  }
  return $result;
}

function invalid_email($email) {
  $result = false;
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $result = true;
  }
  return $result;
}

function pwd_match($pwd, $rpwd) {
  $result = false;
  if ($pwd !== $rpwd) {
    $result = true;
  }
  return $result;
}

function uid_exists($conn, $username, $email) {
  $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../main_files/signup?error=stmtfailed");
    exit();
  }
  mysqli_stmt_bind_param($stmt, "ss", $username, $email);
  mysqli_stmt_execute($stmt);
  $result_data = mysqli_stmt_get_result($stmt);
  if ($row = mysqli_fetch_assoc($result_data)) {
    return $row;
  } else {
    $result = false;
    return $result;
  }
  mysqli_stmt_close($stmt);
}

function create_user($conn, $name, $email, $username, $pwd) {
  $sql = "INSERT INTO users(usersName, usersEmail, usersUid, usersPwd) VALUES(?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../main_files/signup?error=stmtfailed");
    exit();
  }
  $hashed_pwd = password_hash($pwd, PASSWORD_DEFAULT);
  mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashed_pwd);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  header("location: ../main_files/signup?error=none");
  exit();
}
