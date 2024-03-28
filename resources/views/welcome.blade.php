<x-layout>
    @include('_header-post')
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

@auth
@php
    $posts = \App\Models\Post::where('user_id', auth()->id())->get();
@endphp
 @if($posts->count()>0)
    <x-feature :posts="$posts[0]" />
 @else
 <h1 style="text-align: center;">No posts now</h1>
 @endif

@else
<x-feature :posts="$posts[0]" />
@endauth
    <div class="lg:grid lg:grid-cols-2">

        @foreach ($posts->skip(1) as $post)

        @props(["post"])

<article class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                    <div class="py-6 px-5">
                        <div>
                            <img src="/images/illustration-3.png" alt="Blog Post illustration" class="rounded-xl">
                        </div>

                        <div class="mt-8 flex flex-col justify-between">
                            <header>
                                <div class="space-x-2">
                                    <a href="category/{{$post->category->slug}}"
                                       class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                                       style="font-size: 10px">{{$post->category->name}}</a>
                                </div>
                    <!-- <div> -->
            <!-- <a href="#" class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                                       style="font-size: 10px"></a>
                                       </div> -->


                                <div class="mt-4">
                                    <h1 class="text-3xl">
                                       <h1></h1>
                                    </h1>

                                    <span class="mt-2 block text-gray-400 text-xs">
                                        Published <time>{{ $post->created_at->diffForHumans() }} </time>
                                    </span>
                                </div>

                            </header>


                            <div class="text-sm mt-4">

                                <p>
                                    <!-- {{$post->user_id}} -->
                                    {{$post->excerpt}}
                                </p>

                            </div>
                            <footer class="flex justify-between items-center mt-8">
                                <div class="flex items-center text-sm">
                                    <img src="./images/lary-avatar.svg" alt="Lary avatar">
                                    <div class="ml-3">
                                        <h5 class="font-bold">Author</h5>
                                        <h6>{{$post->author}}</h6>
                                    </div>
                                </div>

                                <div>
                                    <a href="post/{{$post->slug}}"
                                       class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                                    >Read More</a>
                                </div>
                            </footer>
                        </div>

                    </div>

                </article>




        @endforeach

    </div>

</main>

    <div class="lg:grid lg:grid-cols-3">

        <x-post-card />
        <x-post-card />
        <x-post-card />

    </div>
</x-layout>
