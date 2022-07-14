<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <style>
            :focus-visible{
                    outline:none !important;
                }
            /* Focusing the button with a keyboard will show a dashed black line. */
                button:focus-visible {
                outline: 4px dashed black;
                }

                /* Focusing the button with a mouse, touch, or stylus will show a subtle drop shadow. */
                button:focus:not(:focus-visible) {
                outline: none;
                box-shadow: 1px 1px 5px rgba(1, 1, 0, .7);
                }
        </style>
        <!-- Scripts -->
        {{-- <link href="{{asset('resources/css/app.css')}}" rel="stylesheets"/> --}}
        {{-- <script src="{{asset('resources/js/app.js')}}"></script> --}}
        <script src="https://cdn.tailwindcss.com"></script>

    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
