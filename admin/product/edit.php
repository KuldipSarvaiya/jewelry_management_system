<!DOCTYPE html>
<html lang="en">

<?php
require_once("../../connect_db.php");
include("../protect.php");

$id = $_GET['id'] or die("Jewelry Not Found, Go Back");

$view = "no";
if (isset($_GET['viewonly'])) {
  $view = $_GET['viewonly'];
}

if (isset($_POST['name'])) {
  $name = $_POST['name'];
  $size = $_POST['size'];
  $material = $_POST['material'];
  $image = $_POST['image'];
  $price = $_POST['price'];
  $category = $_POST['category'];
  $quantity = $_POST['quantity'];
  $description = $_POST['description'];

  try {
    $sql = "UPDATE `jewelry` SET `name` = '$name', `size` = '$size', `material` = '$material', `image` = '$image', `price` = '$price', `description` = '$description', `category` = '$category', `quantity` = '$quantity' WHERE `id` = '$id'";
    if ($conn->query($sql) === TRUE) {
      echo "<script>alert('New product updated successfully')</script>";
      header("location:/jewelry_management_system/admin/product");
    }
  } catch (\Throwable $th) {
    echo "<script>alert('Failed to update product')</script>";
  }
}


$query = "SELECT * FROM `jewelry` where `id` = '$id'";
$result = mysqli_query($conn, $query);
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
      <?php include("../current_user.php") ?>
    </header>
    <main class="w-full flex flex-row justify-center items-center">
      <section class="w-6/12 py-12 md:py-24 lg:py-24 bg-muted flex items-center justify-center">
        <div class="container rounded-lg flex flex-col items-center gap-8 px-4 md:px-6 py-5 text-card-foreground">
          <h2 class="text-2xl font-bold tracking-tight">
            <?php
            if ($view === "yes") echo "View";
            else echo "Update "; ?>
            Product</h2>
          <form action="" method="POST" class="w-full max-w-md space-y-4">
            <div class="grid grid-cols-2 gap-4">
              <div class="space-y-2">
                <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="name">
                  Name
                </label>
                <input <?php if ($view === "yes") echo "disabled"; ?> class="flex h-10 rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 w-full" name="name" id="name" required value="<?php echo $data[1]; ?>" />
              </div>
              <div class="space-y-2">
                <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="size">
                  Size
                </label>
                <input <?php if ($view === "yes") echo "disabled"; ?> class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" id="size" name="size" required value="<?php echo $data[2]; ?>" />
              </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
              <div class="space-y-2">
                <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="material">
                  Material
                </label>
                <select <?php if ($view === "yes") echo "disabled"; ?> required id="material" name="material" class="flex h-10 w-full items-center justify-between rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">
                  <option value="">Select Jewellry Material</option>
                  <option value="Platinum" <?php echo ($data[3] === "Platinum") ? 'selected' : ''; ?>>Platinum</option>
                  <option value="Gold" <?php echo ($data[3] === "Gold") ? 'selected' : ''; ?>>Gold</option>
                  <option value="Silver" <?php echo ($data[3] === "Silver") ? 'selected' : ''; ?>>Silver</option>
                </select>
              </div>
              <div class="space-y-2">
                <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="category">
                  Category
                </label>
                <select <?php if ($view === "yes") echo "disabled"; ?> required id="category" name="category" class="flex h-10 w-full items-center justify-between rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">
                  <option value="">Select Jewellry Category</option>
                  <!-- these will be dynamic -->
                  <?php

                  $sqlC = "SELECT name FROM `categories`";
                  $resultC = mysqli_query($conn, $sqlC);

                  while ($dataC = mysqli_fetch_row($resultC)) {

                  ?>
                    <option value="<?php echo $dataC[0]; ?>" <?php echo ($data[7] === $dataC[0]) ? 'selected' : ''; ?>><?php echo $dataC[0]; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
              <div class="space-y-2">
                <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="quantity">
                  Quantity
                </label>
                <input <?php if ($view === "yes") echo "disabled"; ?> class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" id="quantity" name="quantity" required value="<?php echo $data[8]; ?>" />
              </div>
              <div class="space-y-2">
                <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="price">
                  Price
                </label>
                <input <?php if ($view === "yes") echo "disabled"; ?> class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" id="price" name="price" required value="<?php echo $data[5]; ?>" />
              </div>
            </div>
            <div class="space-y-2">
              <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="image">
                Image URL
              </label>
              <input <?php if ($view === "yes") echo "disabled"; ?> class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" id="image" name="image" required value="<?php echo $data[4]; ?>" />
            </div>
            <div class="space-y-2">
              <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="description">
                Description
              </label>
              <textarea <?php if ($view === "yes") echo "disabled"; ?> class="flex min-h-[80px] w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" id="description" required name="description"><?php echo $data[6]; ?></textarea>
            </div>
            <?php if ($view !== "yes") { ?>
            <div>
              <button class="mt-10 inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 w-full bg-white text-black hover:bg-white/90" type="submit">
                Add Product
              </button>
            </div>
            <?php } ?>
          </form>
          <a href="/jewelry_management_system/admin/product">&larr; <?php if ($view !== "yes") echo "Discart changes & "; ?> Go Back</a>
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