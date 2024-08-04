<?php

  if(!isset($_COOKIE['user_id'])){
    header("location:/jewelry_management_system/signin.php");
  } else {
    $id = $_COOKIE['user_id'];
    $sql = "SELECT * FROM `users` WHERE `id` = '$id'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_row($result);

      setcookie("user_id",$row[0],time() + 3600 * 24 * 30);
      session_start();

      $_SESSION['email'] = $row[5];
      $_SESSION['first_name'] = $row[2];
      $_SESSION['last_name'] = $row[3];      
      $_SESSION['address'] = $row[4];      
      $_SESSION['image'] = $row[7];

    } else {
      echo "<script>alert('Failed to fetch your profile data')</script>";
      header("location:/jewelry_management_system/signin.php");
    }
  }