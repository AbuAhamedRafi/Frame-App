<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Selected Banner | Frame Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="{{ asset('assets/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/prism.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/prism.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets/fabric_with_gestures.js') }}"></script>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/fav.png') }}">
</head>

<body class="">
    <!-- Navigation Bar -->
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
    <!-- Banner Selection -->
    <div id="wrapper">
        <div class="flex flex-col items-center justify-center bg-white text-black h-screen">
            <canvas id="preview_panel" class="border-2 shadow-xl">
            </canvas>
            <div class="file-input-box">
                <h5 class="text-lg font-semibold text-gray-800 py-6">Click to Choose a Photo</h5>
                <input
                    class="block w-full text-sm text-gray-500 file:me-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-600 file:text-white hover:file:bg-blue-700 file:disabled:opacity-50 file:disabled:pointer-events-none dark:text-neutral-500 dark:file:bg-blue-500 dark:hover:file:bg-blue-40"
                    aria-describedby="file_input_help" id="file_input" type="file" name="file"
                    onchange="onFileChange(this)">
            </div>

            <div id="designs" style="display:none;" class="">
                <img class="design active" src="{{ asset('storage/' . $banner->image) }}" data-design="0">
            </div>
            <button id="download" disabled=""
                class="bg-blue-800 hover:bg-blue-800 focus:ring-4 my-6 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 text-white mb-7">
                Download
            </button>

            <p>Downloaded: <span id="current-value">{{ $banner->count }}</span></p>

            <script>
                $(document).ready(function() {
                    $('#download').on('click', function() {
                        $.ajax({
                            url: '{{ route('increment') }}',
                            type: 'POST',
                            data: {
                                id: {{ $banner->id }},
                                _token: '{{ csrf_token() }}' // CSRF token for security
                            },
                            success: function(response) {
                                // Update the UI with the new value
                                $('#current-value').text(response.new_value);
                            }
                        });
                    });
                });
            </script>

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
