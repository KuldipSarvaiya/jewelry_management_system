<?php

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

?>

<header class="flex items-center h-16 border-b border-muted/40 bg-background px-4 lg:px-6">
  <div class="flex-1"></div>
  <span class="text-2xl font-medium mr-1 uppercase">
    <?php echo $_SESSION['first_name'] . " " . $_SESSION['last_name']; ?>
  </span>
  <button class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground rounded-full border w-11 h-11" type="button" id="radix-:r10:" aria-haspopup="menu" aria-expanded="false" data-state="closed">
    <img src="<?php echo $_SESSION['image']; ?>" width="50" height="50" class="rounded-full object-cover aspect-square" alt="img" />
  </button>
</header>