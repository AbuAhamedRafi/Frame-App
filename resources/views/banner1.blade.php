<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banner Selection | Frame Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Generate Frame</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ asset("assets/style.css") }}" rel="stylesheet" async="async">
    <link href="{{ asset('assets/prism.css') }}" rel="stylesheet" async="async">
    <script src="{{ asset('assets/prism.js') }}"></script>
    <script src="{{ asset('assets/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('assets/fabric_with_gestures.js') }}"></script>
</head>

<body class="bg-gray-100">
    <!-- Navigation Bar -->
    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <div class="text-center text-2xl text-white font-bold">
                        <h1>Frame Generator™</h1>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Banner Selection -->
    <div id="wrapper">
        <div id="content">
           <!--<img class="title" src="assets/bdosn.png">-->
           <br />

            <canvas id="preview_panel">
            </canvas>
            <div class="file-input-box">
                <h5>Click the choose file box below and choose a photo</h5>
                <input class="file-input" type="file" name="file" onchange="onFileChange(this)">

                <h5 id="no-file">Upload a Photo</h5>
            </div>
            <button id="download" disabled="">
                <img alt="Show-Pass jetzt herunterladen" src="/assets/button.png">
            </button>
            
            <div id="designs" style="display:none;">
                <img class="design active" src="{{ asset('storage/' . $banner->image) }}" data-design="0">
                <img class="design" src="/assets/portkarte-1.png" data-design="1">
                <img class="design" src="/assets/postkarte-2.png" data-design="2">
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="bg-white rounded-lg shadow dark:bg-gray-900 m-4">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
                <span class="text-center text-2xl font-semibold whitespace-nowrap dark:text-white">Frame
                    Generator™</span>
                <ul
                    class="flex flex-col sm:flex-row items-center mb-6 text-sm font-medium text-gray-500 dark:text-gray-400">
                    <li><a href="#" class="hover:underline me-4 md:me-6">About</a></li>
                    <li><a href="#"
                            class="hover:underline me-4 md:me-6 border-r-2 border-l-2 px-3 mx-3">Licensing</a></li>
                    <li><a href="#" class="hover:underline">Contact</a></li>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-center text-gray-500 dark:text-gray-400">© 2024 Frame Generator™</span>
        </div>
    </footer>
</body>
<script src="{{ asset('assets/main.js') }}" async="async"></script>
</html>
