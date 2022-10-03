@props(['post','k'])

@foreach ( $post as $post_one)
    <div id='divLayer_{{ $k }}_{{ ($loop->index)+1 }}' class='overLayer'>
        <br>
        <div class='content'>
            <strong><span id='content'>제목</span></strong>
            <br><br>
            {!! $post_one->body !!}
        </div>
    </div>
@endforeach
