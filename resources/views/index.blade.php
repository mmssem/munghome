<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>🐾자 멍멍쌤 홈</title>

    <link href="/css/app.css" rel="stylesheet">

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

    <div style="left: 0px;width:100%;">
        <table border=0 width=100% cellspacing=0 cellpadding=0>
            <tr>
                <td class='p_title'>
                    &nbsp;멍멍쌤의 취미생활<br>
                </td>
                <?php
                /*
                    <td align=center valign=bottom>
                    <font size=3 color=white>
                    <?echo "오늘:".$tosum.", 어제:".$yessum.", 전체:".$total." (since 2003)";?>
                    </font>
                    </td>
                */
                ?>
                <td align=right valign=bottom class='p_title1'>
                    <a href='https://mungssem.kr/photo/port/port.php' target=_Blank>추억의 취미 작품집
                        보기</a>&nbsp;&nbsp;&nbsp;<br>
                </td>
                <td align=right valign=bottom class='p_title1'>
                    <a href='https://mungkhs2.cafe24.com/rb/?r=home' target=_Blank>옛날 멍멍홈 방문</a>&nbsp;&nbsp;&nbsp;<br>
                </td>
            </tr>
        </table>
    </div>
    <p><br></p>
    <div class='p_new' style="left: 0px;width:100%;">
        <br>
        <table border=0 width=100% align=center>
            <tr>
                <td>
                    <p align=center class='p_title'>
                        <b>
                            < 최근 업그레이드 현황>
                        </b>
                    </p>
                </td>
            </tr>
        </table>
        <table border=0 width=90% align=center>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <!--///임의 추가 내용-->
            <tr>
                <td>
                    <p>
                        <a href='https://indischool.com/boards/announcement/37251001?page=2' target='_Blank'>
                            <img src='/images/ball.gif' class=inline> 요즘 하고 있는 취미생활
                            => 여름방학 부터 당분간 계속 쪼랩(인디스쿨 취미 코딩 커뮤니티)에서 라라벨(laravel) 공부중입니다. 그래서, 잠시 모든 개발을 멈추게 되어습니다. 추후
                            라라벨 공부가 끝나면 다시 취미 개발을 시작할 예정입니다.</a>
                    </p>
                </td>
            </tr>
            <tr>
                <td style='text-indent:-3em; padding:10px 10px 10px 60px;'>
                    @for ($k = 0; $k < sizeof($new_arr); $k++)
                        <p>
                            <a href='{{ $new_arr[$k][3] }}' target='_Blank' class='data'
                                idx='{{ $new_arr[$k][7] }}_{{ $new_arr[$k][8] }}'>
                                <img src='/images/ball.gif'>
                                {{ $new_arr[$k][2] }} V{{ $new_arr[$k][1] }} ({{ $new_arr[$k][0] }}) </a>
                            @if ($new_arr[$k][4] != '')
                                <a href='{{ $new_arr[$k][4] }}' target='_Blank'><img src='/images/youtube1.png'
                                        width=50></a>
                            @endif
                            => {{ $new_arr[$k][5] }}
                        </p>
                    @endfor
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
        </table>
    </div>
    <p><br></p>
        @for ($k = 1; $k <= $arr_count; $k++)
            @php
                $arr = ${"arr_$k"};
            @endphp

            <div class='p{{ $arr[0][0] }}' style='left: 0px;width:100%;'>
                <br>
                <table border=0 cellspacing=0 cellpadding=0 width=90% align=center class=aa>
                    <tr>
                        <td valign=top style='text-indent:-3em; padding:10px 10px 10px 60px;'>
                            <p align=center class='p_title'><b> {{ $arr[0][1] }}</b></p>
                            <br>
                            @for ($i = 1; $i < sizeof($arr); $i++)
                                <p>
                                    <a href='{{ $arr[$i][3] }}' target='_Blank' class='data'
                                        idx='{{ $arr[0][0] }}_{{ $i }}'>
                                        <img src='/images/ball.gif'>
                                        @php
                                            $timetarget = $arr[$i][0];
                                            $dateDifference = abs(strtotime($timenow) - strtotime($timetarget));
                                            $days = floor($dateDifference / (60 * 60 * 24));
                                        @endphp
                                        @if ($days < 30)
                                            <img src='/images/new.gif' width=30>
                                        @endif
                                        {{ $arr[$i][2] }} V{{ $arr[$i][1] }} ({{ $arr[$i][0] }})
                                    </a>

                                    @if ($arr[$i][4] != '')
                                        <a href='{{ $arr[$i][4] }}' target='_Blank'><img src='/images/youtube1.png'
                                                width=50></a>
                                    @endif
                                    => {{ $arr[$i][5] }}
                                </p>
                            @endfor

                            <br>
                        </td>
                    </tr>
                </table>
            </div>

            <!--레이어 도움말-->
            @for ($j = 1; $j < sizeof($arr); $j++)
                <div id='divLayer_{{ $arr[0][0] }}_{{ $j }}' class='overLayer'>
                    <br>
                    <div class='content'>
                        <strong><span id='content'>제목</span></strong>
                        <br><br>
                        {!! $arr[$j][6] !!}
                    </div>
                </div>
            @endfor

            <p><br></p>
        @endfor

    <p align=center>&nbsp;</p>
    <p align=center>&nbsp;</p>
    <p align=center>&nbsp;</p>
    <p align=center>&nbsp;</p>
    <p align=center>&nbsp;</p>

</body>
</html>
