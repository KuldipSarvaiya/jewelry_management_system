<!DOCTYPE html>
<html lang="en">

<?php
require_once("../../connect_db.php");
include("../protect.php");
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
      <span class="text-2xl font-medium mr-1 uppercase">Kuldip Sarvaiya</span>
      <button class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground rounded-full border w-11 h-11" type="button" id="radix-:r10:" aria-haspopup="menu" aria-expanded="false" data-state="closed">
        <img src="https://th.bing.com/th/id/OIP.Ez0Esjo5uWlyNOZ4elkWRwHaHW?rs=1&pid=ImgDetMain" width="50" height="50" class="rounded-full object-cover aspect-square" alt="" />
        <span class="sr-only">Toggle user menu</span>
      </button>
    </header>
    <main class="w-full flex flex-row justify-center items-center">
      <section class="w-6/12 py-12 md:py-24 lg:py-24 bg-muted flex items-center justify-center">
        <div class="container rounded-lg flex flex-col items-center gap-8 px-4 md:px-6 py-5 text-card-foreground">
          <h2 class="text-2xl font-bold tracking-tight">Add New Jewelry Category</h2>
          <form class="w-full max-w-md space-y-4">
            <div class="grid grid-cols-1 gap-4">
              <div class="space-y-2">
                <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="quantity">
                  Category Name
                </label>
                <input class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" id="quantity" name="quantity" value="" />
              </div>
              <div class="space-y-2">
                <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="description">
                  Description
                </label>
                <textarea class="flex min-h-[80px] w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" id="description" name="description"></textarea>
              </div>
              <div>
                <button class="mt-10 inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 w-full bg-white text-black hover:bg-white/90" type="submit">
                  Add Category
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