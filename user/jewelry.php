<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  echo '<script src="https://cdn.tailwindcss.com"></script>'
  ?>

  <div class="flex flex-col min-h-dvh bg-background">
    <header class="px-4 lg:px-6 h-14 flex items-center">
      <a class="flex items-center justify-center text-yellow-500" href="/jewelry_management_system/user">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-6">
          <path d="M6 3h12l4 6-10 13L2 9Z"></path>
          <path d="M11 3 8 9l4 13 4-13-3-6"></path>
          <path d="M2 9h20"></path>
        </svg>
        <span class="text-xl font-bold">&nbsp;Jewellery Co.</span>
      </a>
      <nav class="ml-auto flex flex-row justify-end items-center gap-4 sm:gap-6">
        <a class="text-lg font-medium hover:underline underline-offset-4" href="/jewelry_management_system/user/collections.php">
          Collections
        </a>
        <a class="text-lg font-medium hover:underline underline-offset-4" href="/jewelry_management_system/user/profile.php">
          Profile
        </a>
        <span class="relative flex shrink-0 overflow-hidden rounded-full w-10 h-10 border shadow-lg shadow-slate-900">
          <img src="https://th.bing.com/th/id/OIP.Ez0Esjo5uWlyNOZ4elkWRwHaHW?rs=1&pid=ImgDetMain" class="flex h-full w-full items-center justify-center rounded-full bg-muted"></img>
        </span>
      </nav>
    </header>

    <main class="flex-1 w-full m-auto">
      <section class="w-full pt-8 pb-5 m-auto">
        <div class="container grid gap-8 px-4 md:px-6">
          <div class="grid md:grid-cols-2 gap-8 items-center">
            <div>
              <img src="https://th.bing.com/th/id/OIP.bFZADjbnx-mkVm142G4SKwAAAA?rs=1&pid=ImgDetMain" width="600" height="600" alt="Jewellery" class="aspect-square object-cover rounded-lg" />
            </div>
            <div class="space-y-6">
              <div>
                <h2 class="text-3xl font-bold tracking-tighter">Platinum Ring</h2>
                <p class="text-muted-foreground">Size: 6</p>
                <p class="text-muted-foreground">Material: Platinum</p>
                <p class="text-3xl font-bold">₹1,499</p>
              </div>
              <div class="prose">
                <p>
                  This exquisite platinum ring is a timeless classic, crafted with the finest attention to detail. The
                  sleek and sophisticated design features a smooth, polished finish that complements any outfit. With
                  a size 6 fit, this ring is the perfect accessory t
                </p>
                <p class="mt-5">
                  Cash On Delivery Only
                </p>
              </div>
              <div class="flex items-center gap-4">
                <button class="inline-flex bg-black text-white items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
                    <path d="M5 12h14"></path>
                  </svg>
                </button>
                <div class="text-lg font-semibold">1</div>
                <button class="inline-flex bg-black text-white  items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
                    <path d="M5 12h14"></path>
                    <path d="M12 5v14"></path>
                  </svg>
                </button>
                <div class="text-muted-foreground text-sm">Available: 10</div>
              </div>
              <button class="inline-flex bg-black text-white items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md px-8">
                Order Now
              </button>
              <br><br><br><br><br><br>
              <a href="/jewelry_management_system/user/collections.php" class="my-10 p-2 rounded-md bg-black text-white ">
                &larr; Go Back
              </a>
            </div>
          </div>
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