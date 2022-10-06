@props(['select_movie'])

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>🐾자 멍멍쌤 홈</title>

    <link href="/css/app.css" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src='http://code.jquery.com/jquery-latest.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.mb.YTPlayer/3.3.9/jquery.mb.YTPlayer.min.js'></script>
    <script src="/js/app.js"></script>
    <link rel="shortcut icon" href="/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
</head>

<body topmargin="0" leftmargin="0" marginwidth="0" marginheight="0">
    <div id="background" class="player"
        data-property="{
            videoURL: '{{ $select_movie }}',
            mute: true,
            showControls: false,
            useOnMobile: true,
            quality: 'highres',
            containment: 'body',
            loop: true,
            autoPlay: true,
            stopMovieOnBlur: false,
            startAt: 0,
            opacity: 1
        }">
    </div>

    {{ $slot }}

    <p align=center>&nbsp;</p>
    <p align=center>&nbsp;</p>
    <p align=center>&nbsp;</p>

    <x-flash />
</body>
</html>
