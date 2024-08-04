<!DOCTYPE html>
<html lang="en">

<?php

  include("./connect_db.php");

  if(isset($_POST['email'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password' AND `role` = 'Admin'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_row($result);

      setcookie("user_id",$row[0],time() + 3600 * 24 * 30);
      session_start();

      $_SESSION['email'] = $email;
      $_SESSION['first_name'] = $row[2];
      $_SESSION['last_name'] = $row[3];      
      $_SESSION['address'] = $row[4];      
      $_SESSION['image'] = $row[7];

      header("location:/jewelry_management_system/admin/index.php");
    } else {
      echo "<script>alert('Incorrect Email or Password')</script>";
    }
  }

?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  echo '<script src="https://cdn.tailwindcss.com"></script>'
  ?>

  <div class="flex items-center justify-center min-h-screen bg-background">
    <div class="max-w-md w-full space-y-8 p-6 bg-card rounded-lg shadow-sm shadow-black text-card-foreground">
      <div class="text-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-16 m-auto text-yellow-500">
          <path d="M6 3h12l4 6-10 13L2 9Z"></path>
          <path d="M11 3 8 9l4 13 4-13-3-6"></path>
          <path d="M2 9h20"></path>
        </svg>
        <h2 class="text-3xl font-bold text-foreground">Sign In</h2>
        <p class="mt-2 text-muted-foreground">Enter your email and password to sign in.</p>
      </div>
      <form action="" method="POST" class="space-y-6">
        <div>
          <label for="email" class="block text-sm font-medium text-muted-foreground">
            Email
          </label>
          <input type="email" id="email" name="email" class="block w-full px-3 py-2 border border-input bg-background rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary" placeholder="Enter your email" required />
        </div>
        <div>
          <label for="password" class="block text-sm font-medium text-muted-foreground">
            Password
          </label>
          <input type="password" id="password" name="password" class="block w-full px-3 py-2 border border-input bg-background rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary" placeholder="Enter your password" required />
        </div>
        <div>
          <button type="submit" class="w-full flex justify-center py-2 text-black hover:text-white bg-black/30 hover:bg-black px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-primary-foreground bg-primary hover:bg-primary/90 focus:outline-none focus:ring-1 focus:ring-primary focus:ring-offset-1">
            Sign In
          </button>
        </div>
        <!-- <center>
          Don&apos;t have account? <a href="signup.php" class="text-blue-400 hover:underline hover:font-extrabold">Sign Up</a>
        </center> -->
      </form>
    </div>
  </div>
</body>

</html>