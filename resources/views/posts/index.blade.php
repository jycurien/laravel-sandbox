<x-app-layout>
    <x-slot name="header">
        <div class="text-center">
            <h1 class="text-6xl font-bold text-orange-600">Posts</h1>
        </div>
    </x-slot>

    @include('posts.partials.list')

    <div class="w-full my-5 p-2">
        {{ $posts->links() }}
    </div>
</x-app-layout>
