<html>

<head>
  <title>Jewelry Site</title>
</head>
<?php
echo '<script src="https://cdn.tailwindcss.com"></script>';
?>

<body>
  <div class="flex items-center justify-center min-h-screen bg-background" data-id="1">
    <div class="max-w-md w-full space-y-8 p-6 bg-card-foreground rounded-lg shadow-sm shadow-black" data-id="2">
      <div class="text-center" data-id="3">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-16 m-auto text-yellow-500">
          <path d="M6 3h12l4 6-10 13L2 9Z"></path>
          <path d="M11 3 8 9l4 13 4-13-3-6"></path>
          <path d="M2 9h20"></path>
        </svg>
        <h2 class="text-3xl font-bold text-foreground" data-id="4">Sign Up</h2>
        <p class="mt-2 text-muted-foreground" data-id="5">Create your account to get started.</p>
      </div>
      <form class="space-y-6" data-id="6">
        <div class="grid grid-cols-2 gap-6" data-id="7">
          <div data-id="8"><label for="firstName" class="block text-sm font-medium text-muted-foreground" data-id="9">First Name</label><input id="firstName" class="block w-full px-3 py-2 border border-input bg-background rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary" placeholder="Enter your first name" required="" data-id="10" type="text"></div>
          <div data-id="11"><label for="lastName" class="block text-sm font-medium text-muted-foreground" data-id="12">Last Name</label><input id="lastName" class="block w-full px-3 py-2 border border-input bg-background rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary" placeholder="Enter your last name" required="" data-id="13" type="text"></div>
        </div>
        <div data-id="14"><label for="profileImage" class="block text-sm font-medium text-muted-foreground" data-id="15">Profile Image URL</label><input id="profileImage" class="block w-full px-3 py-2 border border-input bg-background rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary" placeholder="Enter your profile image URL" required="" data-id="16" type="url"></div>
        <div data-id="17"><label for="address" class="block text-sm font-medium text-muted-foreground" data-id="18">Address</label><input id="address" class="block w-full px-3 py-2 border border-input bg-background rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary" placeholder="Enter your address" required="" data-id="19" type="text"></div>
        <div data-id="20"><label for="email" class="block text-sm font-medium text-muted-foreground" data-id="21">Email</label><input id="email" class="block w-full px-3 py-2 border border-input bg-background rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary" placeholder="Enter your email" required="" data-id="22" type="email"></div>
        <div data-id="23"><label for="password" class="block text-sm font-medium text-muted-foreground" data-id="24">Password</label><input id="password" class="block w-full px-3 py-2 border border-input bg-background rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary" placeholder="Enter your password" required="" data-id="25" type="password"></div>
        <div data-id="26"><button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-black hover:text-white bg-black/30 hover:bg-black focus:outline-none focus:ring-1 focus:ring-primary focus:ring-offset-1" data-id="27">Sign Up</button></div>
        <center>
          Alredy have account? <a href="signin.php" class="text-blue-400 hover:underline hover:font-extrabold">Sign In</a>
        </center>
      </form>
    </div>
  </div>
</body>

</html>