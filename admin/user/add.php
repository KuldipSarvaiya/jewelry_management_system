<!DOCTYPE html>
<html lang="en">

<?php

include("../../connect_db.php");
include("../protect.php");


if (isset($_POST['email'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $address = $_POST['address'];
  $image = $_POST['image'];

  try {
    $sql = "INSERT INTO `users`(`role`, `first_name`, `last_name`, `address`, `email`, `password`, `image`) VALUES ('User','$first_name','$last_name','$address','$email','$password','$image')";
    if ($conn->query($sql) === TRUE) {
      echo "<script>alert('New User created successfully')</script>";
      header("location:/jewelry_management_system/admin/user");
    }
  } catch (\Throwable $th) {
    echo "<script>alert('Failed To Create User')</script>";
  }
}

?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    * {
      @apply border-border;
    }

    body {
      @apply bg-background text-foreground font-body;
    }

    body {
      color: #E7E7E4 !important;
    }


    .text-foreground {
      color: #E7E7E4;
    }

    .bg-background {
      background-color: #0F0F10;
    }

    .text-card-foreground {
      background-color: #18181B;
    }
  </style>
</head>

<body>
  <?php
  echo '<script src="https://cdn.tailwindcss.com"></script>'
  ?>

  <div class="flex flex-col bg-background">
    <header class="flex items-center h-16 border-b border-muted/40 bg-background px-4 lg:px-6">
      <span class="flex items-center justify-center text-yellow-500">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-6">
          <path d="M6 3h12l4 6-10 13L2 9Z"></path>
          <path d="M11 3 8 9l4 13 4-13-3-6"></path>
          <path d="M2 9h20"></path>
        </svg>
        <span class="text-xl font-bold">&nbsp;Jewellery Co.</span>
      </span>
      <div class="flex-1"></div>
      <?php include("../current_user.php") ?>
    </header>
    <main class="w-full flex flex-row justify-center items-center">
      <section class="w-6/12 py-12 md:py-24 lg:py-24 bg-muted flex items-center justify-center">
        <div class="container rounded-lg flex flex-col items-center gap-8 px-4 md:px-6 py-5 text-card-foreground">
          <h2 class="text-2xl font-bold tracking-tight">Create New User</h2>
          <form action="" method="POST" class="w-full max-w-md space-y-4">
            <div class="grid grid-cols-1 gap-4">
              <div class="grid grid-cols-2 gap-4">
                <div class="space-y-2">
                  <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="first_name">
                    First Name
                  </label>
                  <input required type="text" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" id="first_name" name="first_name" value="" />
                </div>
                <div class="space-y-2">
                  <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="last_name">
                    Last Name
                  </label>
                  <input required type="text" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" id="last_name" name="last_name" value="" />
                </div>
              </div>
              <div class="space-y-2">
                <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="email">
                  Email
                </label>
                <input required type="email" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" id="email" name="email" value="" />
              </div>
              <div class="space-y-2">
                <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="password">
                  Password
                </label>
                <input required type="password" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" id="password" name="password" value="" />
              </div>
              <div class="space-y-2">
                <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="image">
                  Profile Image URL
                </label>
                <input required type="text" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" id="image" name="image" value="" />
              </div>
              <div class="space-y-2">
                <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="address">
                  Address
                </label>
                <textarea required class="flex min-h-[80px] w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" id="address" name="address"></textarea>
              </div>
              <div>
                <button class="mt-10 inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 w-full bg-white text-black hover:bg-white/90" type="submit">
                  Add User
                </button>
              </div>
          </form>
        </div>
      </section>
    </main>
    <footer class="flex flex-col gap-2 sm:flex-row py-6 w-full shrink-0 items-center px-4 md:px-6 border-t">
      <p class="text-xs text-muted-foreground">© 2024 Jewellery Co. All rights reserved.</p>
      <nav class="sm:ml-auto flex gap-4 sm:gap-6">
        <a class="text-xs hover:underline underline-offset-4" href="#">
          Terms of Service
        </a>
        <a class="text-xs hover:underline underline-offset-4" href="#">
          Privacy
        </a>
      </nav>
    </footer>
  </div>


</body>

</html>