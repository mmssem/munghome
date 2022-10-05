@props(['newposts'])

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
                @foreach ( $newposts as $newpost)
                    <p>
                        <a href='{{ $newpost->link_blog }}' target='_Blank' class='data'>
                            <img src='/images/ball.gif' class='inline'>

                            {{ $newpost->title }} V{{ $newpost->version }} ({{ $newpost->created }})

                        </a>

                        @if ($newpost->link_youtube != '')
                            <a href='{{ $newpost->link_youtube }}' target='_Blank'><img src='/images/youtube1.png'
                                    width=50 class='inline'></a>
                        @endif
                        => {{ $newpost->excerpt }}
                    </p>
                @endforeach
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
    </table>
</div>
