<!DOCTYPE html>
<html lang="en">

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

  <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-4">
    <div class="rounded-lg border bg-card text-card-foreground shadow-sm" data-v0-t="card">
      <div class="flex flex-col space-y-1.5 p-6">
        <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight">Total Products</h3>
        <p class="text-sm text-muted-foreground">234</p>
      </div>
      <div class="flex items-center p-6">
        <a class="text-primary" href="#" rel="ugc">
          View Products
        </a>
      </div>
    </div>
    <div class="rounded-lg border bg-card text-card-foreground shadow-sm" data-v0-t="card">
      <div class="flex flex-col space-y-1.5 p-6">
        <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight">Total Orders</h3>
        <p class="text-sm text-muted-foreground">1,234</p>
      </div>
      <div class="flex items-center p-6">
        <a class="text-primary" href="#" rel="ugc">
          View Orders
        </a>
      </div>
    </div>
    <div class="rounded-lg border bg-card text-card-foreground shadow-sm" data-v0-t="card">
      <div class="flex flex-col space-y-1.5 p-6">
        <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight">Total Categories</h3>
        <p class="text-sm text-muted-foreground">45</p>
      </div>
      <div class="flex items-center p-6">
        <a class="text-primary" href="#" rel="ugc">
          View Categories
        </a>
      </div>
    </div>
    <div class="rounded-lg border bg-card text-card-foreground shadow-sm" data-v0-t="card">
      <div class="flex flex-col space-y-1.5 p-6">
        <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight">Total Users</h3>
        <p class="text-sm text-muted-foreground">78</p>
      </div>
      <div class="flex items-center p-6">
        <a class="text-primary" href="#" rel="ugc">
          View Users
        </a>
      </div>
    </div>
  </div>

</body>

</html>