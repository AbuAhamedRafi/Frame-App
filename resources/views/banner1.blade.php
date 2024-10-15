<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banner Selection | Frame Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Generate Frame</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ asset('assets/style.css') }}" rel="stylesheet" async="async">
    <link href="{{ asset('assets/prism.css') }}" rel="stylesheet" async="async">
    <script src="{{ asset('assets/prism.js') }}"></script>
    <script src="{{ asset('assets/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('assets/fabric_with_gestures.js') }}"></script>
</head>

<body class="">
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
                <h5 class="text-lg font-semibold text-gray-800 py-6">Click to Choose a Photo</h5>
                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file" type="file" name="file" onchange="onFileChange(this)">
                <h5 id="no-file">Upload a Photo</h5>
            </div>
            
            
            
            <button id="download" disabled=""
                class="bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 text-white mb-7">
                Download </button>
            <div id="designs" style="display:none;">
                <img class="design active" src="{{ asset('storage/' . $banner->image) }}" data-design="0">
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="mt--10 bg-gray-900">
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
<script>
    let bannerImageURL = "{{ asset('storage/' . $banner->image) }}"
</script>

</html>
