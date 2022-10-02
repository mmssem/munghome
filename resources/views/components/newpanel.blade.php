@props(['new_arr'])

<div class='p_new' style="left: 0px;width:100%;">
    <br>
    <table border=0 width=90% align=center>
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
        <tr>
            <td style='text-indent:-3em; padding:10px 10px 10px 60px;'>
                @for ($k = 0; $k < sizeof($new_arr); $k++)
                    <p>
                        <a href='{{ $new_arr[$k][3] }}' target='_Blank' class='data'
                            idx='{{ $new_arr[$k][7] }}_{{ $new_arr[$k][8] }}'>
                            <img src='/images/ball.gif'>

                            {{ $new_arr[$k][2] }} V{{ $new_arr[$k][1] }} ({{ $new_arr[$k][0] }})

                        </a>

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
