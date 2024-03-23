
<x-layout>
    @include('_header-post')
    <x-feature :posts="$posts[0]" />

    <div class="lg:grid lg:grid-cols-2">
        <x-post-card :posts="$posts" />
        <x-post-card />
    </div>
    <div class="lg:grid lg:grid-cols-3">
        @foreach ($posts as $post)
        {{$post->title}}
        <x-post-card />
        <x-post-card />
        <x-post-card />
        @endforeach
    </div>
</x-layout>
