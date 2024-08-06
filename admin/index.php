<html>

<?php
require_once("../connect_db.php");
include("./protect.php");
?>

<head>
  <title>Acme Jewelry</title>
  <link rel="stylesheet" href="../style.css">
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
    <?php include("./sidebar.php") ?>
    <div class="flex flex-col w-full">
      <?php include("./current_user.php") ?>
      <main class="flex-1 p-4 lg:p-6"> 
        <?php include("./stats.php") ?>

        <!-- here goes home page content -->
      </main>
    </div>
  </div>
</body>

</html>