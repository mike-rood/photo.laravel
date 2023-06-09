<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Livewire</title>
        
        @livewireStyles
    </head>
    <body>
        <h1>
            Livewire
        </h1>
        
        <livewire:header/>
        
        {{ $slot }}
        
        @livewireScripts
    </body>
</html>