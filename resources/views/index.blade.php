
<x-topframe :select_movie="$select_movie">

    @include('header')

    <p><br></p>

    <x-newpanel :newposts="$newposts"/>

    <p><br></p>

    @for ($k = 1; $k <= ($categories->count()); $k++)

        @php
            $post = $posts->where('category_id', $k);
        @endphp

        <x-panel :post="$post" :category="$categories[$k-1]->name" :k="$k"/>

        <p><br></p>
    @endfor

    @for ($k = 1; $k <= ($categories->count()); $k++)

        @php
            $post = $posts->where('category_id', $k);
        @endphp

        <!--레이어 도움말-->
        <x-layerhelp :post="$post" :k="$k"/>

    @endfor

</x-topframe>
