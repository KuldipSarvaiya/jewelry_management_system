<!DOCTYPE html>
<html lang="en">

<?php
require_once("../../connect_db.php");
include("../protect.php");

if (isset($_POST['user_id'])) {
  $quantity = $_POST['quantity'];
  $user_id = $_POST['user_id'];
  $product_id = $_POST['product_id'];
  $order_date = $_POST['order_date'];

  $sqlP = "SELECT price, quantity AS available_quantity FROM `jewelry` WHERE id = '$product_id'";
  $resultP = mysqli_query($conn, $sqlP);

  if ($resultP->num_rows > 0) {
    $dataP = mysqli_fetch_assoc($resultP);
    $product_price = $dataP['price'];
    $available_quantity = $dataP['available_quantity'];

    // Check if there's enough stock
    if ($available_quantity >= $quantity) {
      $order_total = $product_price * $quantity;

      try {
        // Begin transaction
        $conn->begin_transaction();

        $sql = "INSERT INTO `orders`(`user_id`, `order_date`, `product_id`, `quantity`, `order_total`) VALUES ('$user_id','$order_date','$product_id','$quantity','$order_total')";
        if ($conn->query($sql) === TRUE) {
          // Update jewelry quantity
          $new_quantity = $available_quantity - $quantity;
          $update_sql = "UPDATE `jewelry` SET quantity = '$new_quantity' WHERE id = '$product_id'";
          if ($conn->query($update_sql) === TRUE) {
            $conn->commit();
            echo "<script>alert('New order created successfully')</script>";
            header("location:/jewelry_management_system/admin/order");
          } else {
            $conn->rollback();
            echo "<script>alert('Failed to update jewelry quantity')</script>";
          }
        } else {
          $conn->rollback();
          echo "<script>alert('Failed to create order')</script>";
        }
      } catch (\Throwable $th) {
        $conn->rollback();
        echo "<script>alert('Error: ' . $th->getMessage())</script>";
      }
    } else {
      // Handle insufficient stock scenario
      echo "<script>alert('Insufficient stock for the product')</script>";
    }
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

  <div class="flex flex-col bg-background min-h-screen">
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
          <h2 class="text-2xl font-bold tracking-tight">Place New Order</h2>
          <form action="" method="POST" class="w-full max-w-md space-y-4">
            <div class="grid grid-cols-1 gap-4">
              <div class="space-y-2">
                <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="user_id">
                  Buyer
                </label>
                <select required id="user_id" name="user_id" class="flex h-10 w-full items-center justify-between rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">
                  <option value="" selected>Select Buyer</option>
                  <?php

                  $sqlB = "SELECT id, first_name, last_name FROM `users` WHERE `role` = 'User'";
                  $resultB = mysqli_query($conn, $sqlB);

                  while ($dataB = mysqli_fetch_row($resultB)) {

                  ?>
                    <option value="<?php echo $dataB[0]; ?>"><?php echo $dataB[1] . " " . $dataB[2]; ?></option>
                  <?php } ?>
                </select>
              </div>
              <div class="space-y-2">
                <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="product_id">
                  Jewelry
                </label>
                <select required id="product_id" name="product_id" class="flex h-10 w-full items-center justify-between rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">
                  <option value="" selected>Select Jewellry</option>
                  <?php

                  $sqlC = "SELECT id,name FROM `jewelry`";
                  $resultC = mysqli_query($conn, $sqlC);

                  while ($dataC = mysqli_fetch_row($resultC)) {

                  ?>
                    <option value="<?php echo $dataC[0]; ?>"><?php echo $dataC[1]; ?></option>
                  <?php } ?>
                </select>
              </div>
              <div class="columns-2">
                <div class="space-y-2">
                  <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="order_date">
                    Date
                  </label>
                  <input type="date" class="w-full flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" required id="order_date" name="order_date" value="" />
                </div>
                <div class="space-y-2">
                  <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="quantity">
                    Quantity
                  </label>
                  <input type="number" required class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" id="quantity" name="quantity" value="" />
                </div>
              </div>
              <div>
                <button class="mt-10 inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 w-full bg-white text-black hover:bg-white/90" type="submit">
                  Place Order
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