<?php
?>

<aside class="bg-background border-r border-muted/40 hidden lg:block">
  <div class="flex flex-col h-full max-h-screen">
    <div class="flex items-center h-16 border-b border-muted/40 px-6">
      <span class="flex items-center gap-2 font-semibold text-yellow-500 word-nowrap cursor-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6">
          <path d="M6 3h12l4 6-10 13L2 9Z"></path>
          <path d="M11 3 8 9l4 13 4-13-3-6"></path>
          <path d="M2 9h20"></path>
        </svg>
        <span>Acme&nbsp;Jewelry</span>
      </span>
    </div>

    <nav class="flex-1 overflow-auto py-4">
      <ul class="grid gap-1 px-4">
        <li class="hover:bg-white/20 rounded-md">
          <a class="flex cursor-none items-center gap-3 rounded-lg px-3 py-2 text-muted-foreground transition-colors hover:bg-muted hover:text-foreground" href="/jewelry_management_system/admin/" rel="ugc">
            <svg data-id="3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
              <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
              <polyline points="9 22 9 12 15 12 15 22"></polyline>
            </svg>
            Home
          </a>
        </li>
        <li class="hover:bg-white/20 rounded-md">
          <a class="flex cursor-none items-center gap-3 rounded-lg px-3 py-2 text-muted-foreground transition-colors hover:bg-muted hover:text-foreground" href="/jewelry_management_system/admin/product/" rel="ugc">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
              <path d="m7.5 4.27 9 5.15"></path>
              <path d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z"></path>
              <path d="m3.3 7 8.7 5 8.7-5"></path>
              <path d="M12 22V12"></path>
            </svg>
            Products
          </a>
        </li>
        <li class="hover:bg-white/20 rounded-md">
          <a class="flex cursor-none items-center gap-3 rounded-lg px-3 py-2 text-muted-foreground transition-colors hover:bg-muted hover:text-foreground" href="/jewelry_management_system/admin/order" rel="ugc">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
              <circle cx="8" cy="21" r="1"></circle>
              <circle cx="19" cy="21" r="1"></circle>
              <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"></path>
            </svg>
            Orders
          </a>
        </li>
        <li class="hover:bg-white/20 rounded-md">
          <a class="flex cursor-none items-center gap-3 rounded-lg px-3 py-2 text-muted-foreground transition-colors hover:bg-muted hover:text-foreground" href="/jewelry_management_system/admin/category" rel="ugc">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
              <path d="M12.586 2.586A2 2 0 0 0 11.172 2H4a2 2 0 0 0-2 2v7.172a2 2 0 0 0 .586 1.414l8.704 8.704a2.426 2.426 0 0 0 3.42 0l6.58-6.58a2.426 2.426 0 0 0 0-3.42z"></path>
              <circle cx="7.5" cy="7.5" r=".5" fill="currentColor"></circle>
            </svg>
            Categories
          </a>
        </li>
        <li class="hover:bg-white/20 rounded-md">
          <a class="flex cursor-none items-center gap-3 rounded-lg px-3 py-2 text-muted-foreground transition-colors hover:bg-muted hover:text-foreground" href="/jewelry_management_system/admin/user" rel="ugc">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
              <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
              <circle cx="9" cy="7" r="4"></circle>
              <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
              <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
            </svg>
            Users
          </a>
        </li>
      </ul>
    </nav>

    <div class="mt-auto border-t border-muted/40 p-4">
      <a href="/jewelry_management_system/admin/logout.php" class="inline-flex items-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3 w-full justify-start gap-2 text-red-500 hover:scale-110 hover:font-bold">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
          <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
          <polyline points="16 17 21 12 16 7"></polyline>
          <line x1="21" x2="9" y1="12" y2="12"></line>
        </svg>
        Logout
      </a>
    </div>
  </div>
</aside>