<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banner Selection | Frame Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/fav.png') }}">
</head>

<body class="">
    {{-- Navigation Bar --}}
    <nav class="bg-gray-900">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <div class="text-center text-2xl text-white font-bold">
                        <a href="{{ route('index') }}" class="btn btn-primary">Frame Generator™</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    {{-- Main Content: Banner Selection Section --}}
    <div class="container mx-auto py-8">
        <div class="flex justify-center">
            <div class="w-full lg:w-2/3 border bg-white rounded-lg shadow-lg p-6 sm:p-8">
                <h2 class="text-center text-2xl md:text-3xl font-bold mb-4">Choose Your Banner</h2>
                <p class="text-center mb-4 text-gray-600">Select the banner you'd like to use, and you'll be redirected
                    to the corresponding page.</p>
            </div>
        </div>
    </div>

    {{--  Image Buttons with Hover Animation --}}
    <div class="container mx-auto py-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 justify-center">
            @foreach ($banners as $banner)
                <a href="{{ route('banner', $banner->id) }}" class="block">
                    <img src="{{ asset('storage/' . $banner->image) }}" alt="{{ $banner->name }}"
                        class="rounded-lg shadow-lg w-2/3 mx-auto object-cover  transform transition duration-500 hover:scale-105">
                    <p class="text-center mt-4 font-semibold text-gray-700">{{ $banner->name }}</p>
                </a>
            @endforeach

        </div>
    </div>

    {{-- Footer --}}
    <footer class="mt-5 bg-gray-900">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
                <span class="text-center text-2xl font-semibold whitespace-nowrap text-white">Frame
                    Generator™</span>
                <ul
                    class="flex flex-col sm:flex-row items-center mb-6 text-sm font-medium text-gray-500 dark:text-gray-400">
                    <li><a href="#" class="hover:underline me-4 md:me-6">About</a></li>
                    <li><a href="https://opensource.org/license/mit"
                            class="hover:underline me-4 md:me-6 border-r-2 border-l-2 px-3 mx-3">Licensing</a></li>
                    <li><a href="https://github.com/AbuAhamedRafi" class="hover:underline">Contact</a></li>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-center text-gray-500 dark:text-gray-400">© 2024 Frame Generator™</span>
        </div>
    </footer>
</body>

</html>
