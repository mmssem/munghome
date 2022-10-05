<x-topframe :select_movie="$select_movie">
    <section class="py-8 max-w-4xl mx-auto grid place-items-center">
        <div class="flex max-w-max">
            <form action="/dashboard/{{ $post->id }}" method="post">
                @csrf
                @method('PATCH')

                <x-form.field>
                    <x-form.label name="category" kor="카테고리" />

                    <select name="category_id" id="category_id">
                        @foreach (\App\Models\Category::all() as $category)
                            <option value="{{ $category->id }}"
                                {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>
                                {{ ucwords($category->name) }}</option>
                        @endforeach

                    </select>

                    <x-form.error name="category" />
                </x-form.field>

                <x-form.input name='title' kor="제목" :value="old('title', $post->title)" required />

                <x-form.input name='created' kor="제작날짜" :value="old('created', $post->created)" required />

                <x-form.input name='version' kor="버전" :value="old('version', $post->version)" required />

                <x-form.textarea name='excerpt' kor="excerpt" required>{{ old('excerpt', $post->excerpt) }}
                </x-form.textarea>
                <x-form.textarea name='body' kor="본문" required>{{ old('body', $post->body) }}</x-form.textarea>

                <x-form.input_null name='link_blog' kor="블로그 링크" :value="old('link_blog', $post->link_blog)" />

                <x-form.input_null name='link_youtube' kor="유튜브 링크" :value="old('link_youtube', $post->link_youtube)" />

                <x-form.input name='order' kor="순서" :value="old('order', $post->order)" required />

                <x-form.button>수 정</x-form.button>
            </form>
        </div>
    </section>
</x-topframe>
