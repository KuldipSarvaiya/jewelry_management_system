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
            <a class="flex items-center justify-center text-yellow-500" href="/jewelry_management_system/user">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-6">
                    <path d="M6 3h12l4 6-10 13L2 9Z"></path>
                    <path d="M11 3 8 9l4 13 4-13-3-6"></path>
                    <path d="M2 9h20"></path>
                </svg>
                <span class="text-xl font-bold">&nbsp;Jewellery Co.</span>
            </a>
            <nav class="ml-auto flex flex-row justify-end items-center gap-4 sm:gap-6">
                <a class="text-lg font-medium hover:underline underline-offset-4" href="/jewelry_management_system/user/collections.php">
                    Collections
                </a>
                <a class="text-lg font-medium hover:underline underline-offset-4" href="/jewelry_management_system/user/profile.php">
                    Profile
                </a>
                <span class="relative flex shrink-0 overflow-hidden rounded-full w-10 h-10 border shadow-lg shadow-slate-900">
                    <img src="https://th.bing.com/th/id/OIP.Ez0Esjo5uWlyNOZ4elkWRwHaHW?rs=1&pid=ImgDetMain" class="flex h-full w-full items-center justify-center rounded-full bg-muted"></img>
                </span>
            </nav>
        </header>

        <main class="flex-1">
            <section class="w-full py-12 md:py-28 lg:py-28 w-full m-auto">
                <div class="container grid gap-8 px-4 md:px-6 w-full m-auto">
                    <div class="grid md:grid-cols-[1fr_3fr] gap-8 items-start">
                        <div class="flex flex-col items-center gap-6">
                            <span class="relative flex shrink-0 overflow-hidden rounded-full w-32 h-32 border ring-2 ring-black shadow-lg shadow-slate-900">
                                <img src="https://th.bing.com/th/id/OIP.Ez0Esjo5uWlyNOZ4elkWRwHaHW?rs=1&pid=ImgDetMain" class="flex h-full w-full items-center justify-center rounded-full bg-muted"></img>
                            </span>
                            <div class="text-center">
                                <h2 class="text-2xl font-bold">John Doe</h2>
                                <p class="text-muted-foreground">john.doe@example.com</p>
                                <p class="text-muted-foreground">123 Main St, Anytown USA</p>
                            </div>
                            <button class="inline-flex bg-black text-white items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md px-8">
                                Logout &rarr;
                            </button>
                        </div>
                        <div class="border rounded-lg overflow-hidden">
                            <div class="relative w-full overflow-auto">
                                <table class="caption-bottom text-sm w-full">
                                    <thead class="[&_tr]:border-b bg-slate-200">
                                        <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                                            <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">Order ID</th>
                                            <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">Product</th>
                                            <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">Size</th>
                                            <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">Price</th>
                                            <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">Quantity</th>
                                            <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">Status</th>
                                            <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0"><span class="sr-only">Cancel</span></th>
                                        </tr>
                                    </thead>
                                    <tbody class="[&_tr:last-child]:border-0">
                                        <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                                            <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 font-medium">ORD001</td>
                                            <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0">
                                                <div class="flex items-center gap-4">
                                                    <img src="https://th.bing.com/th/id/OIP.bFZADjbnx-mkVm142G4SKwAAAA?rs=1&pid=ImgDetMain" width="64" height="64" alt="Platinum Ring" class="rounded-md" style="aspect-ratio:64/64;object-fit:cover" />
                                                    <div>Platinum Ring</div>
                                                </div>
                                            </td>
                                            <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0">6</td>
                                            <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0">₹1499.00</td>
                                            <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0">1</td>
                                            <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0">
                                                <div class="bg-green-400/20 border-green-500 inline-flex w-fit items-center whitespace-nowrap rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2" data-v0-t="badge">Accepted</div>
                                            </td>
                                            <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0">
                                                <button class="hover:bg-red-400/20 hover:border-red-500 inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent h-10 w-10 text-red-500 hover:text-red-600">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
                                                        <path d="M3 6h18"></path>
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                                    </svg>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                                            <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 font-medium">ORD002</td>
                                            <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0">
                                                <div class="flex items-center gap-4">
                                                    <img src="https://th.bing.com/th/id/OIP.bFZADjbnx-mkVm142G4SKwAAAA?rs=1&pid=ImgDetMain" width="64" height="64" alt="Platinum Ring" class="rounded-md" style="aspect-ratio:64/64;object-fit:cover" />
                                                    <div>Platinum Ring</div>
                                                </div>
                                            </td>
                                            <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0">6</td>
                                            <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0">₹1499.00</td>
                                            <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0">1</td>
                                            <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0">
                                                <div class="bg-orange-400/20 border-orange-500 inline-flex w-fit items-center whitespace-nowrap rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2" data-v0-t="badge">Shiped</div>
                                            </td>
                                            <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0">
                                                <button class="hover:bg-red-400/20 hover:border-red-500 inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent h-10 w-10 text-red-500 hover:text-red-600">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
                                                        <path d="M3 6h18"></path>
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                                    </svg>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                                            <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 font-medium">ORD003</td>
                                            <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0">
                                                <div class="flex items-center gap-4">
                                                    <img src="https://th.bing.com/th/id/OIP.bFZADjbnx-mkVm142G4SKwAAAA?rs=1&pid=ImgDetMain" width="64" height="64" alt="Platinum Ring" class="rounded-md" style="aspect-ratio:64/64;object-fit:cover" />
                                                    <div>Platinum Ring</div>
                                                </div>
                                            </td>
                                            <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0">6</td>
                                            <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0">₹1499.00</td>
                                            <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0">1</td>
                                            <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0">
                                                <div class="bg-red-400/20 border-red-500 inline-flex w-fit items-center whitespace-nowrap rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2" data-v0-t="badge">Canceled</div>
                                            </td>
                                            <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0">
                                                <button class="hover:bg-red-400/20 hover:border-red-500 inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent h-10 w-10 text-red-500 hover:text-red-600">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
                                                        <path d="M3 6h18"></path>
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                                    </svg>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer class="flex flex-col gap-2 sm:flex-row py-6 w-full shrink-0 items-center px-4 md:px-6 border-t">
            <p class="text-xs text-muted-foreground">© 2024 Jewellery Co. All rights reserved.</p>
            <nav class="sm:ml-auto flex gap-4 sm:gap-6">
                <a class="text-xs hover:underline underline-offset-4" href="#">Terms of Service</a>
                <a class="text-xs hover:underline underline-offset-4" href="#">Privacy</a>
            </nav>
        </footer>
    </div>
</body>

</html>