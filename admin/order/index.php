<html>

<head>
  <title>Acme Jewelry</title>
  <link rel="stylesheet" href="../styles.css">
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

<body class="bg-background text-foreground">
  <?php
  echo '<script src="https://cdn.tailwindcss.com"></script>'
  ?>


  <div class="flex min-h-screen w-full">
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

        <!-- sidebar -->
        <nav class="flex-1 overflow-auto py-4">
          <ul class="grid gap-1 px-4">
            <li class="hover:bg-white/20 rounded-md">
              <a class="flex cursor-none items-center gap-3 rounded-lg px-3 py-2 text-muted-foreground transition-colors hover:bg-muted hover:text-foreground" href="/jewellary/admin/" rel="ugc">
                <svg data-id="3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                  <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                  <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
                Home
              </a>
            </li>
            <li class="hover:bg-white/20 rounded-md">
              <a class="flex cursor-none items-center gap-3 rounded-lg px-3 py-2 text-muted-foreground transition-colors hover:bg-muted hover:text-foreground" href="/jewellary/admin/product/" rel="ugc">
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
              <a class="flex cursor-none items-center gap-3 rounded-lg px-3 py-2 text-muted-foreground transition-colors hover:bg-muted hover:text-foreground" href="/jewellary/admin/order" rel="ugc">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                  <circle cx="8" cy="21" r="1"></circle>
                  <circle cx="19" cy="21" r="1"></circle>
                  <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"></path>
                </svg>
                Orders
              </a>
            </li>
            <li class="hover:bg-white/20 rounded-md">
              <a class="flex cursor-none items-center gap-3 rounded-lg px-3 py-2 text-muted-foreground transition-colors hover:bg-muted hover:text-foreground" href="/jewellary/admin/category" rel="ugc">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                  <path d="M12.586 2.586A2 2 0 0 0 11.172 2H4a2 2 0 0 0-2 2v7.172a2 2 0 0 0 .586 1.414l8.704 8.704a2.426 2.426 0 0 0 3.42 0l6.58-6.58a2.426 2.426 0 0 0 0-3.42z"></path>
                  <circle cx="7.5" cy="7.5" r=".5" fill="currentColor"></circle>
                </svg>
                Categories
              </a>
            </li>
            <li class="hover:bg-white/20 rounded-md">
              <a class="flex cursor-none items-center gap-3 rounded-lg px-3 py-2 text-muted-foreground transition-colors hover:bg-muted hover:text-foreground" href="/jewellary/admin/user" rel="ugc">
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
          <button class="inline-flex items-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3 w-full justify-start gap-2 text-red-500 hover:scale-110 hover:font-bold">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
              <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
              <polyline points="16 17 21 12 16 7"></polyline>
              <line x1="21" x2="9" y1="12" y2="12"></line>
            </svg>
            Logout
          </button>
        </div>
      </div>
    </aside>
    <div class="flex flex-col w-full">
      <header class="flex items-center h-16 border-b border-muted/40 bg-background px-4 lg:px-6">
        <div class="flex-1"></div>
        <span class="text-2xl font-medium mr-1 uppercase">Kuldip Sarvaiya</span>
        <button class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground rounded-full border w-11 h-11" type="button" id="radix-:r10:" aria-haspopup="menu" aria-expanded="false" data-state="closed">
          <img src="https://th.bing.com/th/id/OIP.Ez0Esjo5uWlyNOZ4elkWRwHaHW?rs=1&pid=ImgDetMain" width="50" height="50" class="rounded-full object-cover aspect-square" alt="" />
          <span class="sr-only">Toggle user menu</span>
        </button>
      </header>
      <main class="flex-1 p-4 lg:p-6">
        <div class="grid gap-6">
          <?php include("../stats.php") ?>
          <div class="rounded-lg border bg-card text-card-foreground shadow-sm" data-v0-t="card">
            <div class="flex flex-row justify-between space-y-1.5 p-6">
              <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight">Manage Orders</h3>
              <button class="rounded-md bg-white/30 px-2 py-1">
                Add Order
              </button>
            </div>
            <div class="p-6">
              <div class="relative w-full overflow-auto">
                <table class="w-full caption-bottom text-sm">
                  <thead class="[&amp;_tr]:border-b">
                    <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                      <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                        Order ID
                      </th>
                      <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                        Customer
                      </th>
                      <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                        Product
                      </th>
                      <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                        Date
                      </th>
                      <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                        Total
                      </th>
                      <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                        Status
                      </th>
                      <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                        Action
                      </th>
                    </tr>
                  </thead>
                  <tbody class="[&amp;_tr:last-child]:border-0">
                    <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                      <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">
                        <a class="font-medium" href="#" rel="ugc">
                          #125
                        </a>
                      </td>
                      <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">Bob Johnson</td>
                      <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">Simple Ring</td>
                      <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">2023-04-13</td>
                      <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">$300.00</td>
                      <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">
                        <div class="inline-flex w-fit items-center whitespace-nowrap rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2" data-v0-t="badge">
                          Cancelled
                        </div>
                      </td>
                      <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">
                        <div class="flex items-center gap-4">
                          <a class="text-muted-foreground hover:text-foreground hover:text-blue-400 scale-150" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                              <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                              <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                            <span class="sr-only">View</span>
                          </a>
                          <a class="text-muted-foreground hover:text-foreground hover:text-orange-400 scale-125" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                              <path d="M12 22h6a2 2 0 0 0 2-2V7l-5-5H6a2 2 0 0 0-2 2v10"></path>
                              <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                              <path d="M10.4 12.6a2 2 0 1 1 3 3L8 21l-4 1 1-4Z"></path>
                            </svg>
                            <span class="sr-only">Edit</span>
                          </a>
                          <a class="text-muted-foreground hover:text-foreground hover:text-red-500 scale-125" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                              <path d="M3 6h18"></path>
                              <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                              <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                            </svg>
                            <span class="sr-only">Delete</span>
                          </a>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
</body>

</html>