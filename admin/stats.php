  <?php

  $sql = "SELECT 
            (SELECT COUNT(*) FROM users) AS total_users,
            (SELECT COUNT(*) FROM orders) AS total_orders,
            (SELECT COUNT(*) FROM categories) AS total_categories,
            (SELECT COUNT(*) FROM jewelry) AS total_jewelry,
            (SELECT SUM(order_total) FROM orders) AS total_order_amount";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    $row = mysqli_fetch_assoc($result);

    $totalUsers = $row['total_users'];
    $totalOrders = $row['total_orders'];
    $totalCategories = $row['total_categories'];
    $totalJewelry = $row['total_jewelry'];
    $totalOrderAmount = $row['total_order_amount'];
  } else {
    echo "Error: " . mysqli_error($conn);
  }


  echo '<script src="https://cdn.tailwindcss.com"></script>'
  ?>
  <section class="w-full bg-muted flex items-center justify-center">
    <div class="container flex flex-col items-center gap-8">
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 w-full">
        <div class="rounded-lg border bg-card text-card-foreground shadow-sm" data-v0-t="card">
          <div class="flex flex-col space-y-1.5 p-6">
            <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight">Total Revenue</h3>
          </div>
          <div class="p-6 flex items-center justify-between">
            <span class="text-3xl font-bold">₹<?php echo number_format($totalOrderAmount,0,".",","); ?></span>
            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8">
              <path d="M6 3h12" />
              <path d="M6 8h12" />
              <path d="m6 13 8.5 8" />
              <path d="M6 13h3" />
              <path d="M9 13c6.667 0 6.667-10 0-10" />
            </svg> -->
          </div>
        </div>
        <div class="rounded-lg border bg-card text-card-foreground shadow-sm" data-v0-t="card">
          <div class="flex flex-col space-y-1.5 p-6">
            <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight">Total Products</h3>
          </div>
          <div class="p-6 flex items-center justify-between">
            <span class="text-4xl font-bold"><?php echo $totalJewelry; ?></span>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8">
              <path d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z"></path>
              <path d="m3.3 7 8.7 5 8.7-5"></path>
              <path d="M12 22V12"></path>
            </svg>
          </div>
        </div>
        <div class="rounded-lg border bg-card text-card-foreground shadow-sm" data-v0-t="card">
          <div class="flex flex-col space-y-1.5 p-6">
            <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight">Total Orders</h3>
          </div>
          <div class="p-6 flex items-center justify-between">
            <span class="text-4xl font-bold"><?php echo $totalOrders; ?></span>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8">
              <circle cx="8" cy="21" r="1"></circle>
              <circle cx="19" cy="21" r="1"></circle>
              <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"></path>
            </svg>
          </div>
        </div>
        <div class="rounded-lg border bg-card text-card-foreground shadow-sm" data-v0-t="card">
          <div class="flex flex-col space-y-1.5 p-6">
            <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight">Total Customers</h3>
          </div>
          <div class="p-6 flex items-center justify-between">
            <span class="text-4xl font-bold"><?php echo $totalUsers; ?></span>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8">
              <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
              <circle cx="9" cy="7" r="4"></circle>
              <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
              <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
            </svg>
          </div>
        </div>
        <div class="rounded-lg border bg-card text-card-foreground shadow-sm" data-v0-t="card">
          <div class="flex flex-col space-y-1.5 p-6">
            <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight">Total Categories</h3>
          </div>
          <div class="p-6 flex items-center justify-between">
            <span class="text-4xl font-bold"><?php echo $totalCategories; ?></span>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-8 w-8">
              <path d="M12.586 2.586A2 2 0 0 0 11.172 2H4a2 2 0 0 0-2 2v7.172a2 2 0 0 0 .586 1.414l8.704 8.704a2.426 2.426 0 0 0 3.42 0l6.58-6.58a2.426 2.426 0 0 0 0-3.42z"></path>
              <circle cx="7.5" cy="7.5" r=".5" fill="currentColor"></circle>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </section>