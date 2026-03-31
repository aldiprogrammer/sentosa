<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel DaisyUI v5</title>

    <!-- Tailwind + DaisyUI -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primaryGreen: '#4ade80'
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-base-200 min-h-screen">

    <div class="drawer lg:drawer-open">
        <input id="sidebar" type="checkbox" class="drawer-toggle" />

        <!-- Content -->
        <div class="drawer-content flex flex-col">

            <!-- Navbar -->
            <div class="navbar bg-base-100 border-b border-base-300 px-4 shadow-sm">
                <div class="flex-none lg:hidden">
                    <label for="sidebar" class="btn btn-square btn-ghost">
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-5 w-5 stroke-current"
                            fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </label>
                </div>

                <div class="flex-1">
                    <h1 class="text-2xl font-bold text-primaryGreen">Dashboard Admin</h1>
                </div>

                <div class="flex gap-3 items-center">
                    <button class="btn btn-ghost btn-circle">
                        <div class="indicator">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                            <span class="badge badge-sm badge-success indicator-item">3</span>
                        </div>
                    </button>

                    <div class="dropdown dropdown-end">
                        <div tabindex="0" role="button" class="btn btn-ghost flex items-center gap-2">
                            <div class="avatar placeholder">
                                <div class="bg-primaryGreen text-white rounded-full w-10">
                                    <span>A</span>
                                </div>
                            </div>
                            <span class="hidden md:block font-medium">Admin</span>
                        </div>

                        <ul tabindex="0"
                            class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                            <li><a>Profile</a></li>
                            <li><a>Pengaturan</a></li>
                            <li><a class="text-error">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            @yield('content')
        </div>

        <!-- Sidebar -->
        <div class="drawer-side z-50">
            <label for="sidebar" class="drawer-overlay"></label>

            <aside class="w-72 min-h-full bg-base-100 border-r border-base-300">
                <div class="p-6 border-b border-base-300">
                    <h2 class="text-2xl font-bold text-primaryGreen">My Admin</h2>
                    <p class="text-sm text-gray-500 mt-1">DaisyUI v5 Panel</p>
                </div>

                <ul class="menu p-4 text-base-content w-full gap-1">
                    <li>
                        <a class="active bg-success text-success-content rounded-xl">
                            Dashboard
                        </a>
                    </li>

                    <li>
                        <a class="rounded-xl">User</a>
                    </li>

                    <li>
                        <a class="rounded-xl">Produk</a>
                    </li>

                    <li>
                        <a class="rounded-xl">Pesanan</a>
                    </li>

                    <li>
                        <details>
                            <summary class="rounded-xl">Laporan</summary>
                            <ul>
                                <li><a>Penjualan</a></li>
                                <li><a>Keuangan</a></li>
                            </ul>
                        </details>
                    </li>

                    <li>
                        <a class="rounded-xl">Pengaturan</a>
                    </li>
                </ul>
            </aside>
        </div>
    </div>

</body>

</html>
```
