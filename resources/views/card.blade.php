<!DOCTYPE html>
<html>

<head>
    <title>Livewire CRUD</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <style>
        .image-container {
            position: relative;
        }

        .nav-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            opacity: 0.9;
        }
    </style>
</head>

<body>
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <main>
            <div class="image-container">
                <img class="rounded-t-lg" src="https://dpp-frontend-protokol.vercel.app/static/images/item/speaker.png"
                    alt="" />
                <nav class="nav-overlay border-gray-200 bg-transparent dark:bg-transparent dark:border-gray-700">
                    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                            <img src="{{ asset('protokol.svg') }}" class="h-8" alt="" />
                        </a>
                    </div>
                </nav>
                <div>
                </div>
            </div>
        </main>
    </div>
    @livewireScripts
</body>

</html>
