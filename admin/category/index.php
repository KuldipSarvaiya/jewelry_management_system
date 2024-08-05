<html>

<?php
require_once("../../connect_db.php");
include("../protect.php");

if (isset($_GET['delete_id'])) {
  $delete_id = $_GET['delete_id'];
  $query = "DELETE FROM `categories` WHERE `id` = '$delete_id'";
  $deleted = mysqli_query($conn, $query) or die("Failed to delete the Category, GO Back");
  if ($deleted) header("location:/jewelry_management_system/admin/category");
}


  $sql = "SELECT * FROM `categories`";
  $result = mysqli_query($conn, $sql);

?>

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
              <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight">Manage Jewelry Categories</h3>
              <a href="add.php" class="rounded-md bg-white/30 px-3 py-1 text-lg font-medium hover:bg-white hover:text-black">
                Add Category
              </a>
            </div>
            <div class="p-6">
              <div class="relative w-full overflow-auto">
                <table class="w-full caption-bottom text-sm">
                  <thead class="[&amp;_tr]:border-b">
                    <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                      <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                        #
                      </th>
                      <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">Category Name</th>
                      <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">Description</th>
                      <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">Action</th>
                    </tr>
                  </thead>
                  <tbody class="[&amp;_tr:last-child]:border-0">
                    <?php

                    while ($data = mysqli_fetch_row($result)) {

                    ?>
                      <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                        <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0"><?php echo $data[0]; ?></td>
                        <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0"><?php echo $data[1]; ?></td>
                        <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">
                          <div class="max-w-[500px]"><?php echo $data[2]; ?></div>
                        </td>
                        <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">
                          <div class="flex items-center gap-4">
                            <a class="text-muted-foreground hover:text-foreground hover:text-blue-400 scale-150" href="edit.php?id=<?php echo $data[0]; ?>&viewonly=yes">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                                <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                              </svg>
                              <span class="sr-only">View</span>
                            </a>
                            <a class="text-muted-foreground hover:text-foreground hover:text-orange-400 scale-125" href="edit.php?id=<?php echo $data[0]; ?>">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                                <path d="M12 22h6a2 2 0 0 0 2-2V7l-5-5H6a2 2 0 0 0-2 2v10"></path>
                                <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                <path d="M10.4 12.6a2 2 0 1 1 3 3L8 21l-4 1 1-4Z"></path>
                              </svg>
                              <span class="sr-only">Edit</span>
                            </a>
                            <a href="?delete_id=<?php echo $data[0]; ?>" type="submit" class="text-muted-foreground hover:text-foreground hover:text-red-500 scale-125">
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
                    <?php } ?>
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