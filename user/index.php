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
  <main class="flex-1">
    <section class="w-full pt-12 md:pt-24 lg:pt-32 border-y">
      <div class="px-4 md:px-6 space-y-10 xl:space-y-16">
        <div class="grid max-w-[1300px] mx-auto gap-4 px-4 sm:px-6 md:px-10 md:grid-cols-2 md:gap-16">
          <div>
            <h1 class="lg:leading-tighter text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl xl:text-[3.4rem] 2xl:text-[3.75rem]">
              Elevate Your Style with Our Exquisite Jewellery
            </h1>
          </div>
          <div class="flex flex-col items-start space-y-4">
            <p class="mx-auto max-w-[700px] text-muted-foreground md:text-xl">
              Discover a world of timeless elegance and modern sophistication with our carefully curated collection
              of fine jewellery.
            </p>
            <div class="space-x-4">
              <a
                class="inline-flex h-9 bg-black text-white items-center justify-center rounded-md bg-primary px-4 py-2 text-sm font-medium text-primary-foreground shadow transition-colors hover:bg-primary/90 focus-visible:outline-none focus:ring-1 focus:ring-ring disabled:pointer-events-none disabled:opacity-50"
                href="#"
              >
                Explore Collections
              </a>
              <a
                class="inline-flex h-9 items-center justify-center rounded-md border border-input bg-background px-4 py-2 text-sm font-medium shadow-sm transition-colors hover:bg-accent hover:text-accent-foreground focus-visible:outline-none focus:ring-1 focus:ring-ring disabled:pointer-events-none disabled:opacity-50"
                href="#"
              >
                Contact Us
              </a>
            </div>
          </div>
        </div>
        <div class="grid gap-8 md:grid-cols-2 lg:gap-12">
          <div class="relative">
            <img
              src="https://th.bing.com/th/id/OIP.bFZADjbnx-mkVm142G4SKwAAAA?rs=1&pid=ImgDetMain"
              width="650"
              height="365"
              alt="Jewellery"
              class="aspect-video overflow-hidden rounded-xl object-cover"
            />
            <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center">
              <div class="font-bold text-primary text-orange-200/50 uppercase tracking-[20px] text-[100px] bg-black mix-blend-screen">Rings</div>
            </div>
          </div>
          <div class="relative">
            <img
              src="https://th.bing.com/th/id/OIP.bFZADjbnx-mkVm142G4SKwAAAA?rs=1&pid=ImgDetMain"
              width="650"
              height="365"
              alt="Jewellery"
              class="aspect-video overflow-hidden rounded-xl object-cover"
            />
            <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center">
              <div class="font-bold text-primary text-orange-200/50 uppercase tracking-[5px] text-[100px] bg-black mix-blend-screen">Necklace</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="w-full py-12 md:py-24 lg:py-32">
      <div class="container space-y-12 px-4 md:px-6 w-full m-auto">
        <div class="flex flex-col items-center justify-center space-y-4 text-center">
          <div class="space-y-2">
            <div class="inline-block rounded-lg bg-muted px-3 py-1 text-sm">Timeless Elegance</div>
            <h2 class="text-3xl font-bold tracking-tighter sm:text-5xl">Crafted with Precision and Care</h2>
            <p class="max-w-[900px] text-muted-foreground md:text-xl/relaxed lg:text-base/relaxed xl:text-xl/relaxed">
              Our jewellery is meticulously designed and crafted by skilled artisans, using only the finest
              materials to ensure unparalleled quality and lasting beauty.
            </p>
          </div>
        </div>
        <div class="mx-auto grid items-start gap-8 sm:max-w-4xl sm:grid-cols-2 md:gap-12 lg:max-w-5xl lg:grid-cols-3 w-full m-auto">
          <div class="grid gap-1 w-full m-auto">
            <div class="relative">
              <img
                src="https://th.bing.com/th/id/OIP.bFZADjbnx-mkVm142G4SKwAAAA?rs=1&pid=ImgDetMain"
                width="200"
                height="200"
                alt="Jewellery"
                class="aspect-square overflow-hidden rounded-xl object-cover"
              />
              <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center">
                <div class="text-3xl font-bold text-primary uppercase tracking-wide mix-blend-screen bg-white">Earrings</div>
              </div>
            </div>
          </div>
          <div class="grid gap-1">
            <div class="relative">
              <img
                src="https://th.bing.com/th/id/OIP.bFZADjbnx-mkVm142G4SKwAAAA?rs=1&pid=ImgDetMain"
                width="200"
                height="200"
                alt="Jewellery"
                class="aspect-square overflow-hidden rounded-xl object-cover"
              />
              <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center">
                <div class="text-3xl font-bold text-primary uppercase tracking-wide mix-blend-screen bg-white">Bracelets</div>
              </div>
            </div>
          </div>
          <div class="grid gap-1">
            <div class="relative">
              <img
                src="https://th.bing.com/th/id/OIP.bFZADjbnx-mkVm142G4SKwAAAA?rs=1&pid=ImgDetMain"
                width="200"
                height="200"
                alt="Jewellery"
                class="aspect-square overflow-hidden rounded-xl object-cover"
              />
              <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center">
                <div class="text-3xl font-bold text-primary uppercase tracking-wide mix-blend-screen bg-white">Pendants</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="w-full py-12 md:py-24 lg:py-32 bg-muted">
      <div class="container grid items-center justify-center gap-4 px-4 text-center md:px-6 w-full m-auto">
        <div class="space-y-3">
          <h2 class="text-3xl font-bold tracking-tighter md:text-4xl/tight">
            Discover the Beauty of Our Jewellery
          </h2>
          <p class="mx-auto max-w-[600px] text-muted-foreground md:text-xl/relaxed lg:text-base/relaxed xl:text-xl/relaxed">
            Explore our exquisite collection of fine jewellery and find the perfect piece to elevate your style.
          </p>
        </div>
        <div class="mx-auto w-full max-w-sm space-y-2">
          <a
            class="inline-flex bg-black text-white h-10 items-center justify-center rounded-md bg-primary px-8 text-sm font-medium text-primary-foreground shadow transition-colors hover:bg-primary/90 focus-visible:outline-none focus:ring-1 focus:ring-ring disabled:pointer-events-none disabled:opacity-50"
            href="#"
          >
            Shop Now
          </a>
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