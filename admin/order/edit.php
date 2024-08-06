<!DOCTYPE html>
<html lang="en">

<?php
require_once("../../connect_db.php");
include("../protect.php");

$id = $_GET['id'] or die("Order Not Found, Go Back");


if (isset($_POST['order_status'])) {
  $order_status = $_POST['order_status'];

  // Update order status
  $update_order_sql = "UPDATE `orders` SET `order_status` = '$order_status' WHERE `id` = '$id'";
  if (mysqli_query($conn, $update_order_sql)) {
    if ($order_status === 'rejected') {
      // Restore jewelry quantity
      $order_data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `orders` WHERE `id` = '$id'"));
      $product_id = $order_data['product_id'];
      $quantity = $order_data['quantity'];

      $update_jewelry_sql = "UPDATE `jewelry` SET `quantity` = `quantity` + $quantity WHERE `id` = '$product_id'";
      mysqli_query($conn, $update_jewelry_sql);
    }
    echo "<script>alert('Order status updated successfully');</script>";
    header("location:/jewelry_management_system/admin/order");
  } else {
    echo "<script>alert('Error updating order status');</script>";
  }
}


$query = "SELECT * FROM `orders` where `id` = '$id'";
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
          <h2 class="text-2xl font-bold tracking-tight">Update Order</h2>
          <form action="" method="POST" class="w-full max-w-md space-y-4">
            <div class="grid grid-cols-1 gap-4">
              <div class="space-y-2">
                <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="quantity">
                  Buyer
                </label>
                <select required id="user_id" disabled name="user_id" class="flex h-10 w-full items-center justify-between rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">
                  <?php

                  $sqlB = "SELECT id, first_name, last_name FROM `users` WHERE `role` = 'User'";
                  $resultB = mysqli_query($conn, $sqlB);

                  while ($dataB = mysqli_fetch_row($resultB)) {

                  ?>
                    <option value="<?php echo $dataB[0]; ?>" <?php echo ($dataB[0] === $id) ? 'selected' : ''; ?>><?php echo $dataB[1] . " " . $dataB[2]; ?></option>
                  <?php } ?>
                </select>
              </div>
              <div class="space-y-2">
                <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="quantity">
                  Jewelry
                </label>
                <select required id="product_id" disabled name="product_id" class="flex h-10 w-full items-center justify-between rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">
                  <?php

                  $sqlC = "SELECT id,name FROM `jewelry`";
                  $resultC = mysqli_query($conn, $sqlC);

                  while ($dataC = mysqli_fetch_row($resultC)) {

                  ?>
                    <option value="<?php echo $dataC[0]; ?>" <?php echo ($dataC[0] === $data[3]) ? 'selected' : ''; ?>><?php echo $dataC[1]; ?></option>
                  <?php } ?>
                </select>
              </div>
              <div class="columns-2">
                <div class="space-y-2">
                  <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="order_date">
                    Date
                  </label>
                  <input disabled type="date" class="w-full flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" id="order_date" name="order_date" value="<?php echo $data[5]; ?>" />
                </div>
                <div class="space-y-2">
                  <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="quantity">
                    Quantity
                  </label>
                  <input disabled class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" id="quantity" name="quantity" value="<?php echo $data[4]; ?>" />
                </div>
              </div>
              <div class="space-y-2">
                <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="order_total">
                  Order Total
                </label>
                <input disabled class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" id="order_total" name="order_total" value="<?php echo $data[6]; ?>" />
              </div>
              <div class="space-y-2">
                <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="order_status">
                  Order Status
                </label>
                <select required id="order_status" name="order_status" class="flex h-10 w-full items-center justify-between rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">
                  <?php
                  switch ($data[5]) {
                    case 'Pending':
                      echo '<option value="Pending" selected>Pending</option>';
                      echo '<option value="Rejected">Reject</option>';
                      echo '<option value="Accepted">Accept</option>';
                      break;
                    case 'Accepted':
                      echo '<option value="Accepted" selected>Accept</option>';
                      echo '<option value="Shipped">Shipped</option>';
                      break;
                    case 'Shipped':
                      echo '<option value="Shipped" selected>Shipped</option>';
                      echo '<option value="Delivered">Delivered</option>';
                      break;
                    case 'Delivered':
                      echo '<option value="Delivered" selected>Delivered</option>';
                      break;
                  }
                  ?>
                </select>
              </div>
              <div>
                <button class="mt-10 inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 w-full bg-white text-black hover:bg-white/90" type="submit">
                  Update Order
                </button>
              </div>
          </form>
        </div>
        <a href="/jewelry_management_system/admin/order">&larr; Discart changes & Go Back</a>
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