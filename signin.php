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

<div class="flex items-center justify-center min-h-screen bg-background">
  <div class="max-w-md w-full space-y-8 p-6 bg-card rounded-lg shadow-lg text-card-foreground">
    <div class="text-center">
      <h2 class="text-3xl font-bold text-foreground">Sign In</h2>
      <p class="mt-2 text-muted-foreground">Enter your email and password to sign in.</p>
    </div>
    <form class="space-y-6">
      <div>
        <label for="email" class="block text-sm font-medium text-muted-foreground">
          Email
        </label>
        <input
          type="email"
          id="email"
          class="block w-full px-3 py-2 border border-input bg-background rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary"
          placeholder="Enter your email"
          required=""
        />
      </div>
      <div>
        <label for="password" class="block text-sm font-medium text-muted-foreground">
          Password
        </label>
        <input
          type="password"
          id="password"
          class="block w-full px-3 py-2 border border-input bg-background rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary"
          placeholder="Enter your password"
          required=""
        />
      </div>
      <div>
        <button
          type="submit"
          class="w-full flex justify-center py-2 text-black hover:text-white bg-black/30 hover:bg-black/80 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-primary-foreground bg-primary hover:bg-primary/90 focus:outline-none focus:ring-1 focus:ring-primary focus:ring-offset-1"
        >
          Sign In
        </button>
      </div>
      <center>
        Don&apos;t have account? <a href="signup.php" class="text-blue-400 hover:underline">Sign Up</a>
      </center>
    </form>
  </div>
</div>
</body>
</html>