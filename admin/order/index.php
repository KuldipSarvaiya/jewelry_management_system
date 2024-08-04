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
    <!-- sidebar -->
    <?php include("../sidebar.php") ?>
    <div class="flex flex-col w-full">
      <?php include("../current_user.php") ?>
      <main class="flex-1 p-4 lg:p-6">
        <div class="grid gap-6">
          <?php include("../stats.php") ?>
          <div class="rounded-lg border bg-card text-card-foreground shadow-sm" data-v0-t="card">
            <div class="flex flex-row justify-between space-y-1.5 p-6">
              <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight">Manage Orders</h3>
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
                          <a class="text-muted-foreground hover:text-foreground hover:text-blue-400 scale-150" href="edit.php?viewonly=yes">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                              <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                              <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                            <span class="sr-only">View</span>
                          </a>
                          <a class="text-muted-foreground hover:text-foreground hover:text-orange-400 scale-125" href="add.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                              <path d="M12 22h6a2 2 0 0 0 2-2V7l-5-5H6a2 2 0 0 0-2 2v10"></path>
                              <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                              <path d="M10.4 12.6a2 2 0 1 1 3 3L8 21l-4 1 1-4Z"></path>
                            </svg>
                            <span class="sr-only">Edit</span>
                          </a>
                          <form action="" class="my-auto">
                            <button type="submit" class="text-muted-foreground hover:text-foreground hover:text-red-500 scale-125">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                                <path d="M3 6h18"></path>
                                <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                              </svg>
                              <span class="sr-only">Delete</span>
                            </button>
                          </form>
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