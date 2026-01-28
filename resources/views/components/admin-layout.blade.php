<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
</head>
<body class="bg-gray-100">

    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start">
                    <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap">AdminPanel</span>
                </div>
                <div class="flex items-center">
                    <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300" data-dropdown-toggle="dropdown-user">
                        <div class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white text-xs font-bold">
                            {{ substr(Auth::user()->name, 0, 1) }}
                        </div>
                    </button>
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow" id="dropdown-user">
                        <div class="px-4 py-3">
                            <p class="text-sm text-gray-900">{{ Auth::user()->name }}</p>
                            <p class="text-sm font-medium text-gray-900 truncate">{{ Auth::user()->email }}</p>
                        </div>
                        <ul class="py-1">
                            <li><a href="{{ route('profile.show') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Perfil</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0" aria-label="Sidebar">
       <div class="h-full px-3 pb-4 overflow-y-auto bg-white">
          <ul class="space-y-2 font-medium">
             <li>
                <a href="/admin" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                   <span class="ms-3">Dashboard Admin</span>
                </a>
             </li>
             <li>
                <a href="{{ route('profile.show') }}" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                   <span class="flex-1 ms-3 whitespace-nowrap">Mi Perfil</span>
                </a>
             </li>
          </ul>
       </div>
    </aside>

    <div class="p-4 sm:ml-64 mt-14">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg mt-4">
            {{ $slot }}
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>
</html>
