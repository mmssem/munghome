@for ($j = 1; $j < sizeof($arr); $j++)
    <div id='divLayer_{{ $k }}_{{ $j }}' class='overLayer'>
        <br>
        <div class='content'>
            <strong><span id='content'>제목</span></strong>
            <br><br>
            {!! $arr[$j][6] !!}
        </div>
    </div>
@endfor
