<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8 ">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg ">
                            <table class="min-w-full divide-y divide-gray-200 grid place-items-center table-fixed">
                                <tbody class="bg-white divide-y divide-gray-200 ">

                                    @foreach ($posts as $post)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap w-3/4">
                                                <div class="flex items-center ">
                                                    <div class="text-sm font-medium text-gray-900 ">
                                                        <a href="/dashboard/{{ $post->id }}/edit">
                                                            {{ $post->title }}
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <a href="/dashboard/{{ $post->id }}/edit"
                                                    class="text-blue-500 hover:text-blue-600">Edit</a>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <form method="POST" action="/dashboard/{{ $post->id }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="text-xs text-gray-400">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
