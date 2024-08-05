<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superadmin Dashboard</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <!-- Main Bar -->
    <nav class="bg-gray-800 text-white py-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Manager Dashboard</h1>
            <div class="hidden md:flex space-x-4">
                <a href="../index.php" class="text-gray-300 hover:text-white">Log out</a>
    
                <a href="#" class="text-gray-300 hover:text-white">Reporting</a>
                
                <a href="../manager/dashboard.php" class="text-gray-300 hover:text-white">Back home</a>
            </div>
            
            <button id="toggleSidebar" class="md:hidden focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
    </nav>

    <!-- Sidebars -->
    <div class="container mx-auto md:flex">
        <!-- Main Sidebar -->
        <div id="mainSidebar" class="bg-gray-800 text-white md:w-64 py-4 hidden md:block">
            <div class="p-4">
                <h2 class="text-xl font-bold mb-4">Menu</h2>
                <ul>
                   
                    <li class="mb-2">
                        <a href="../settings.php" class="flex items-center py-2 px-4 rounded hover:bg-gray-700">
                            <span class="mr-2">👤</span> settings
                        </a>
                    </li>
                    
                    <li class="mb-2">
                        <a href="../profile.php" class="flex items-center py-2 px-4 rounded hover:bg-gray-700">
                            <span class="mr-2">👤</span> my profile
                        </a>
                    </li>
                    
                    </li>
                    <li class="mb-2">
                        <a href="#" class="flex items-center py-2 px-4 rounded hover:bg-gray-700">
                            <span class="mr-2">🏠</span> property lists
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="../agent/create.php" class="flex items-center py-2 px-4 rounded hover:bg-gray-700">
                            <span class="mr-2">👥</span> Agents
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Property Admin Sidebar -->
        
    <!-- Content -->
    <div class="ml-64 md:ml-0 mt-4 md:mt-0">
        <div class="container mx-auto">
            <h2 class="text-2xl font-bold mb-4">Dashboard Overview</h2>
            <div class="bg-white p-4 rounded-lg shadow">
                <!-- Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <div class="bg-blue-200 p-4 rounded-lg shadow-md">
                        <h3 class="text-xl font-bold mb-2">Total Buyers</h3>
                        <p class="text-3xl font-bold">150</p>
                    </div>
                    <div class="bg-green-200 p-4 rounded-lg shadow-md">
                        <h3 class="text-xl font-bold mb-2">Total Users</h3>
                        <p class="text-3xl font-bold">10</p>
                    </div>
                    <div class="bg-yellow-200 p-4 rounded-lg shadow-md">
                        <h3 class="text-xl font-bold mb-2">Total Sellers</h3>
                        <p class="text-3xl font-bold">500</p>
                    </div>
                    <div class="bg-yellow-200 p-4 rounded-lg shadow-md">
                        <h3 class="text-xl font-bold mb-2">Total properties</h3>
                        <p class="text-3xl font-bold">500</p>
                    </div>
                    <div class="bg-red-200 p-4 rounded-lg shadow-md">
                        <h3 class="text-xl font-bold mb-2">Total agents</h3>
                        <p class="text-3xl font-bold">500</p>
                </div>
                <div class="bg-yellow-200 p-4 rounded-lg shadow-md">
                        <h3 class="text-xl font-bold mb-2">Total roles</h3>
                        <p class="text-3xl font-bold">2</p>
                    </div>
            </div>
        </div>
        
    </div>

    <!-- Bootstrap JS -->
    <script src="https://
