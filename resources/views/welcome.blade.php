<x-layout>
    @include('_header-post')
    <x-feature />
    <div class="lg:grid lg:grid-cols-2">
        <x-post-card />
        <x-post-card />
    </div>
    <div class="lg:grid lg:grid-cols-3">
        <x-post-card />
        <x-post-card />
        <x-post-card />
    </div>
</x-layout>
