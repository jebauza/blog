<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Code Free</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        @if(config('app.env') !== 'production')
            <script src="https://cdn.tailwindcss.com"></script>
        @endif
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/appSass.css') }}">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>

    @php
        $color = 'red';
        $alert = 'alert2';
    @endphp

    <body>

        <div class="container mx-auto">
                <x-alert :color="$color" class="mb-4">
                    <x-slot name="title">
                        Titulo 1
                    </x-slot>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi ex aut nobis nihil nesciunt fugit magnam perspiciatis consectetur enim, excepturi deserunt eius iste adipisci rerum expedita sed deleniti natus quis.
                </x-alert>

                <x-alert2 color="blue" class="mb-4">

                    <x-slot name="title">
                        Titulo de prueba
                    </x-slot>

                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi excepturi et fugit non magni necessitatibus sed, quos nisi voluptatibus tempore quo officia neque aliquam corporis error aut eligendi unde in.
                </x-alert2>

                <x-dynamic-component :component="$alert">
                    <x-slot name="title">
                        Titulo de prueba
                    </x-slot>

                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi excepturi et fugit non magni necessitatibus sed, quos nisi voluptatibus tempore quo officia neque aliquam corporis error aut eligendi unde in.
                </x-dynamic-component>
        </div>

        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
