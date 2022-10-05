<x-topframe :select_movie="$select_movie">
    <section class="py-8 max-w-4xl mx-auto grid place-items-center">
        <div class="flex max-w-max">

        <form action="/dashboard" method="post">
            @csrf

            <x-form.field>
                <x-form.label name="category" kor="카테고리" />

                <select name="category_id" id="category_id">
                    @foreach (\App\Models\Category::all() as $category)
                        <option value="{{$category->id}}">{{ucwords($category->name)}}</option>
                    @endforeach

                </select>

                <x-form.error name="category" />
            </x-form.field>

            <x-form.input name='title' kor="제목" required />

            <x-form.input name='created' kor="제작날짜(20221012)" required />

            <x-form.input name='version' kor="버전" required />

            <x-form.textarea name='excerpt' kor="excerpt" required />

            <x-form.textarea name='body' kor="본문" required />

            <x-form.input_null name='link_blog' kor="블로그 링크" />

            <x-form.input_null name='link_youtube' kor="유튜브 링크" />

            <x-form.input name='order' kor="순서(숫자만)" required />

            <x-form.button>저 장</x-form.button>
        </form>
        </div>
    </section>
</x-topframe>
