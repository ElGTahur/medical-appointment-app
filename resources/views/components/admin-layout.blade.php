<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simify - Panel Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-gray-100">

    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start">
                    <a href="/" class="flex ms-2 md:me-24">
                        <i class="fa-solid fa-calendar-plus text-blue-600 me-2 text-xl"></i>
                        <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap">Simify</span>
                    </a>
                </div>

                <div class="flex items-center">
                    <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300" data-dropdown-toggle="dropdown-user">
                        <div class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white text-xs font-bold">
                            {{ substr(Auth::user()?->name ?? 'Admin', 0, 1) }}
                        </div>
                    </button>
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow" id="dropdown-user">
                        <div class="px-4 py-3">
                            <p class="text-sm text-gray-900">{{ Auth::user()?->name ?? 'Invitado' }}</p>
                            <p class="text-sm font-medium text-gray-900 truncate">{{ Auth::user()?->email ?? 'test@example.com' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    @include('admin.sidebar')

    <div class="p-4 sm:ml-64 mt-14">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg mt-4">
            {{ $slot }}
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>
</html>
