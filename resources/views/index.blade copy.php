<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>🐾자 멍멍쌤 홈</title>

    <link href="/css/app.css" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src='http://code.jquery.com/jquery-latest.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.mb.YTPlayer/3.3.9/jquery.mb.YTPlayer.min.js'></script>
    <script src="/js/app.js"></script>
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

    @include('header')

    <p><br></p>

    <x-newpanel2 :newposts="$newposts"/>

    <p><br></p>

    @for ($k = 1; $k <= ($categories->count()); $k++)

        @php
            $post = $posts->where('category_id', $k);
        @endphp

        <x-panel2 :post="$post" :category="$categories[$k-1]->name" :k="$k"/>

        <p><br></p>
    @endfor

    @for ($k = 1; $k <= ($categories->count()); $k++)

        @php
            $post = $posts->where('category_id', $k);
        @endphp

        <!--레이어 도움말-->
        <x-layerhelp2 :post="$post" :k="$k"/>

    @endfor

    <p align=center>&nbsp;</p>
    <p align=center>&nbsp;</p>
    <p align=center>&nbsp;</p>

</body>
</html>
