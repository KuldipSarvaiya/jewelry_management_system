<!DOCTYPE html>
<html lang="en">

<?php
require_once("../../connect_db.php");
include("../protect.php");

$view = "no";
if (isset($_GET['viewonly'])) {
  $view = $_GET['viewonly'];
}

$id = $_GET['id'] or die("User Not Found, Go Back");

if (isset($_POST['email'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $address = $_POST['address'];
  $image = $_POST['image'];


  try {
    $sql = "UPDATE `users` SET `first_name`='$first_name',`last_name`='$last_name',`address`='$address',`email`='$email',`password`='$password',`image`='$image' WHERE id = '$id'";
    if ($conn->query($sql) === TRUE) {
      echo "<script>alert('User updated successfully')</script>";
      header("location:/jewelry_management_system/admin/user");
    }
  } catch (\Throwable $th) {
    echo "<script>alert('Failed To Update User')</script>";
  }
}


$sql = "SELECT * FROM `users` WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_row($result);

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
      <span class="text-2xl font-medium mr-1 uppercase">Kuldip Sarvaiya</span>
      <button class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground rounded-full border w-11 h-11" type="button" id="radix-:r10:" aria-haspopup="menu" aria-expanded="false" data-state="closed">
        <img src="https://th.bing.com/th/id/OIP.Ez0Esjo5uWlyNOZ4elkWRwHaHW?rs=1&pid=ImgDetMain" width="50" height="50" class="rounded-full object-cover aspect-square" alt="" />
        <span class="sr-only">Toggle user menu</span>
      </button>
    </header>
    <main class="w-full flex flex-row justify-center items-center">
      <section class="w-6/12 py-12 md:py-24 lg:py-24 bg-muted flex items-center justify-center">
        <div class="container rounded-lg flex flex-col items-center gap-8 px-4 md:px-6 py-5 text-card-foreground">
          <h2 class="text-2xl font-bold tracking-tight">
            <?php
            if ($view === "yes")
              echo "View";
            else echo "Update";
            ?>
            User</h2>
          <form action="" method="POST" class="w-full max-w-md space-y-4">
            <div class="grid grid-cols-1 gap-4">
              <div class="grid grid-cols-2 gap-4">
                <div class="space-y-2">
                  <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="first_name">
                    First Name
                  </label>
                  <input require <?php if ($view === "yes") echo "disabled"; ?> class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" id="first_name" name="first_name" value="<?php echo $data[2]; ?>" />
                </div>
                <div class="space-y-2">
                  <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="last_name">
                    Last Name
                  </label>
                  <input require <?php if ($view === "yes") echo "disabled"; ?> class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" id="last_name" name="last_name" value="<?php echo $data[3]; ?>" />
                </div>
              </div>
              <div class="space-y-2">
                <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="email">
                  Email
                </label>
                <input require <?php if ($view === "yes") echo "disabled"; ?> type="email" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" id="email" name="email" value="<?php echo $data[5]; ?>" />
              </div>
              <div class="space-y-2">
                <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="password">
                  Password
                </label>
                <input require <?php if ($view === "yes") echo "disabled"; ?> type="password" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" id="password" name="password" value="<?php echo $data[6]; ?>" />
              </div>
              <div class="space-y-2">
                <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="image">
                  Profile Image
                </label>
                <input require <?php if ($view === "yes") echo "disabled"; ?> type="text" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" id="image" name="image" value="<?php echo $data[7]; ?>" />
              </div>
              <div class="space-y-2">
                <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="address">
                  Address
                </label>
                <textarea require <?php if ($view === "yes") echo "disabled"; ?> class="flex min-h-[80px] w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" id="address" name="address"><?php echo $data[4]; ?></textarea>
              </div>
              <?php if ($view !== "yes") { ?>
                <div>
                  <button class="mt-10 inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 w-full bg-white text-black hover:bg-white/90" type="submit">
                    Update User
                  </button>
                </div>
              <?php } ?>
          </form>
        </div>
        <a href="/jewelry_management_system/admin/user" ont-bold tracking-tight">
          &larr;
          <?php
          if ($view !== "yes")
            echo " Discart changes & ";
          ?> Go Back</a>
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