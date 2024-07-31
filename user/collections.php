<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .bg-backgound{
      backgound-color: black;
    }
  </style>
</head>
<body>
<?php
  echo '<script src="https://cdn.tailwindcss.com"></script>'
?>

<header class="px-4 lg:px-6 h-14 flex items-center">
    <a class="flex items-center justify-center" href="#">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="24"
        height="24"
        viewBox="0 0 24 24"
        fill="none"
        stroke="currentColor"
        stroke-width="2"
        stroke-linecap="round"
        stroke-linejoin="round"
        class="size-6"
      >
        <path d="M6 3h12l4 6-10 13L2 9Z"></path>
        <path d="M11 3 8 9l4 13 4-13-3-6"></path>
        <path d="M2 9h20"></path>
      </svg>
      <span class="sr-only">Jewellery Co.</span>
    </a>
    <nav class="ml-auto flex gap-4 sm:gap-6">
      <a class="text-sm font-medium hover:underline underline-offset-4" href="#">
        Collections
      </a>
      <a class="text-sm font-medium hover:underline underline-offset-4" href="#">
        About
      </a>
      <a class="text-sm font-medium hover:underline underline-offset-4" href="#">
        Contact
      </a>
    </nav>
  </header>
<div id="gilvdq3c4ho" class="container grid gap-8 px-4 md:px-6 w-full m-auto">
  <div class="flex flex-col items-center justify-center space-y-4 text-center">
    <div class="space-y-2">
      <div class="inline-block rounded-lg bg-muted px-3 py-1 text-sm">Explore Our Collections</div>
      <h2 class="text-3xl font-bold tracking-tighter sm:text-5xl">Discover Our Exquisite Jewellery</h2>
      <p class="max-w-[900px] text-muted-foreground md:text-xl/relaxed lg:text-base/relaxed xl:text-xl/relaxed">
        Browse through our carefully curated collection of fine jewellery, each piece meticulously crafted to
        elevate your style.
      </p>
    </div>
  </div>
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
    <div class="bg-background rounded-lg shadow-slate-600 shadow-lg overflow-hidden">
      <img src="https://th.bing.com/th/id/OIP.bFZADjbnx-mkVm142G4SKwAAAA?rs=1&pid=ImgDetMain" width="300" height="300" alt="Jewellery" class="aspect-square object-cover" />
      <div class="p-4 flex flex-col justify-between h-fit">
        <div>
          <h3 class="text-lg font-semibold">Platinum Ring</h3>
          <p class="text-muted-foreground">Size: 6</p>
          <p class="text-muted-foreground">Material: Platinum</p>
          <p class="text-lg font-semibold">$1,499</p>
        </div>
        <button class="bg-black text-white rounded-md w-full p-1">
          View Details
        </button>
      </div>
    </div>
    <div class="bg-background rounded-lg shadow-slate-600 shadow-lg overflow-hidden">
      <img src="https://th.bing.com/th/id/OIP.bFZADjbnx-mkVm142G4SKwAAAA?rs=1&pid=ImgDetMain" width="300" height="300" alt="Jewellery" class="aspect-square object-cover" />
      <div class="p-4 flex flex-col justify-between h-fit">
        <div>
          <h3 class="text-lg font-semibold">Gold Necklace</h3>
          <p class="text-muted-foreground">Length: 18 inches</p>
          <p class="text-muted-foreground">Material: 14k Gold</p>
          <p class="text-lg font-semibold">$799</p>
        </div>
        <button class="bg-black text-white rounded-md w-full p-1">
          View Details
        </button>
      </div>
    </div>
    <div class="bg-background rounded-lg shadow-slate-600 shadow-lg overflow-hidden">
      <img src="https://th.bing.com/th/id/OIP.bFZADjbnx-mkVm142G4SKwAAAA?rs=1&pid=ImgDetMain" width="300" height="300" alt="Jewellery" class="aspect-square object-cover" />
      <div class="p-4 flex flex-col justify-between h-fit">
        <div>
          <h3 class="text-lg font-semibold">Silver Earrings</h3>
          <p class="text-muted-foreground">Size: Small</p>
          <p class="text-muted-foreground">Material: Sterling Silver</p>
          <p class="text-lg font-semibold">$149</p>
        </div>
        <button class="bg-black text-white rounded-md w-full p-1">
          View Details
        </button>
      </div>
    </div>
    <div class="bg-background rounded-lg shadow-slate-600 shadow-lg overflow-hidden">
      <img src="https://th.bing.com/th/id/OIP.bFZADjbnx-mkVm142G4SKwAAAA?rs=1&pid=ImgDetMain" width="300" height="300" alt="Jewellery" class="aspect-square object-cover" />
      <div class="p-4 flex flex-col justify-between h-fit">
        <div>
          <h3 class="text-lg font-semibold">Gold Bracelet</h3>
          <p class="text-muted-foreground">Size: 7 inches</p>
          <p class="text-muted-foreground">Material: 18k Gold</p>
          <p class="text-lg font-semibold">$1,099</p>
        </div>
        <button class="bg-black text-white rounded-md w-full p-1">
          View Details
        </button>
      </div>
    </div>
    <div class="bg-background rounded-lg shadow-slate-600 shadow-lg overflow-hidden">
      <img src="https://th.bing.com/th/id/OIP.bFZADjbnx-mkVm142G4SKwAAAA?rs=1&pid=ImgDetMain" width="300" height="300" alt="Jewellery" class="aspect-square object-cover" />
      <div class="p-4 flex flex-col justify-between h-fit">
        <div>
          <h3 class="text-lg font-semibold">Diamond Pendant</h3>
          <p class="text-muted-foreground">Length: 16 inches</p>
          <p class="text-muted-foreground">Material: 14k Gold, Diamond</p>
          <p class="text-lg font-semibold">$2,499</p>
        </div>
        <button class="bg-black text-white rounded-md w-full p-1">
          View Details
        </button>
      </div>
    </div>
    <div class="bg-background rounded-lg shadow-slate-600 shadow-lg overflow-hidden">
      <img src="https://th.bing.com/th/id/OIP.bFZADjbnx-mkVm142G4SKwAAAA?rs=1&pid=ImgDetMain" width="300" height="300" alt="Jewellery" class="aspect-square object-cover" />
      <div class="p-4 flex flex-col justify-between h-fit">
        <div>
          <h3 class="text-lg font-semibold">Silver Necklace</h3>
          <p class="text-muted-foreground">Length: 20 inches</p>
          <p class="text-muted-foreground">Material: Sterling Silver</p>
          <p class="text-lg font-semibold">$299</p>
        </div>
        <button class="bg-black text-white rounded-md w-full p-1">
          View Details
        </button>
      </div>
    </div>
    <div class="bg-background rounded-lg shadow-slate-600 shadow-lg overflow-hidden">
      <img src="https://th.bing.com/th/id/OIP.bFZADjbnx-mkVm142G4SKwAAAA?rs=1&pid=ImgDetMain" width="300" height="300" alt="Jewellery" class="aspect-square object-cover" />
      <div class="p-4 flex flex-col justify-between h-fit">
        <div>
          <h3 class="text-lg font-semibold">Gold Earrings</h3>
          <p class="text-muted-foreground">Size: Medium</p>
          <p class="text-muted-foreground">Material: 14k Gold</p>
          <p class="text-lg font-semibold">$399</p>
        </div>
        <button class="bg-black text-white rounded-md w-full p-1">
          View Details
        </button>
      </div>
    </div>
    <div class="bg-background rounded-lg shadow-slate-600 shadow-lg overflow-hidden">
      <img src="https://th.bing.com/th/id/OIP.bFZADjbnx-mkVm142G4SKwAAAA?rs=1&pid=ImgDetMain" width="300" height="300" alt="Jewellery" class="aspect-square object-cover" />
      <div class="p-4 flex flex-col justify-between h-fit">
        <div>
          <h3 class="text-lg font-semibold">Platinum Bracelet</h3>
          <p class="text-muted-foreground">Size: 6.5 inches</p>
          <p class="text-muted-foreground">Material: Platinum</p>
          <p class="text-lg font-semibold">$1,799</p>
        </div>
        <button class="bg-black text-white rounded-md w-full p-1">
          View Details
        </button>
      </div>
    </div>
  </div>
</div>
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

</body>
</html>