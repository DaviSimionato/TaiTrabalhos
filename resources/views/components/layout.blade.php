@props(["title","bgColor", "column" => "false"])
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href={{asset("imagens/logo-icon-32.ico")}} type="image/x-icon">
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    @vite('resources/css/app.css')
    <script
    src="https://code.jquery.com/jquery-3.7.1.js"
    integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <title>{{ $title ?? "Taí Trabalhos" }}</title>
    @if ($column == "true")
    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
            justify-content: space-between;
        }
        </style>    
    @endif
</head>
<body class="{{$bgColor ?? "bg-ttBg"}}">
    <x-header />
    {{ $slot }}
    <x-message/>
    <x-footer/>
</body>
</html>