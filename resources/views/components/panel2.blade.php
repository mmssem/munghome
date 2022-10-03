@props(['post','category','k'])

<div class='p{{ $k }}' style='left: 0px;width:100%;'>
    <br>
    <table border=0 cellspacing=0 cellpadding=0 width=90% align=center class=aa>
        <tr>
            <td>
                <p align=center class='p_title'>
                    <b>
                        {{ $category }}
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
                @foreach ( $post as $post_one)
                    <p>
                        <a href='{{ $post_one->link_blog }}' target='_Blank' class='data'
                            idx='{{ $k }}_{{ ($loop->index)+1 }}'>
                            <img src='/images/ball.gif'>
                            @php
                                $timenow = date("Ymd");
                                $timetarget = $post_one->created;
                                $dateDifference = abs(strtotime($timenow) - strtotime($timetarget));
                                $days = floor($dateDifference / (60 * 60 * 24));
                            @endphp
                            @if ($days < 30)
                                <img src='/images/new.gif' width=30>
                            @endif
                            {{ $post_one->title }} V{{ $post_one->version }} ({{ $post_one->created }})
                        </a>

                        @if ($post_one->link_youtube != '')
                            <a href='{{ $post_one->link_youtube }}' target='_Blank'><img src='/images/youtube1.png' width=50></a>
                        @endif
                        => {{ $post_one->excerpt }}
                    </p>
                @endforeach
                <br>
            </td>
        </tr>
    </table>
</div>
