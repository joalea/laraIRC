<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>laraIRC</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>{{ $title ?? 'Page Title' }}</title>
        @vite('resources/js/app.js')
    </head>
    <body>
        {{ $slot }}


        <script>
        function scrollToBottom(divId) {
            var div = document.getElementById(divId);
            if(div) {
                div.scrollTop = div.scrollHeight;
            }
        }
        </script>
        <script>
        window.addEventListener('scroll', function() {
            scrollToBottom('chat');
        });
        </script>
    </body>
</html>
