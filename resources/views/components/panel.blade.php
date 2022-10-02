@props(['arr','k','timenow'])

<div class='p{{ $arr[0][0] }}' style='left: 0px;width:100%;'>
    <br>
    <table border=0 cellspacing=0 cellpadding=0 width=90% align=center class=aa>
        <tr>
            <td>
                <p align=center class='p_title'>
                    <b>
                        {{ $arr[0][1] }}
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
                            <a href='{{ $arr[$i][4] }}' target='_Blank'><img src='/images/youtube1.png' width=50></a>
                        @endif
                        => {{ $arr[$i][5] }}
                    </p>
                @endfor

                <br>
            </td>
        </tr>
    </table>
</div>
