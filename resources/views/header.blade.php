
    <div style="left: 0px;width:100%;">
        <table border=0 width=100% cellspacing=0 cellpadding=0>
            <tr>
                <td class='p_title'>
                    &nbsp;🐾자 멍멍쌤의 취미생활<br>
                </td>
                <td align=center valign=bottom class='p_title1'>
                    <font size=3 color=white>
                    오늘:11, 어제:22, 전체:33 (since 2003)
                    </font>
                </td>
                <td valign=bottom class='p_title1'>
                    @if (Route::has('login'))
                        <div class="hidden top-0 right-0 px-6 py-0 sm:block">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 ">🐾</a>
                            @else
                                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 ">🐾</a>
                            @endauth
                        </div>
                    @endif
                </td>
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
