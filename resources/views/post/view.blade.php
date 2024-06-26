<x-layout >
@foreach($categoryPost as $category)

<!-- <h1>{{ $category_name}}</h1> -->




    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
    <article
                class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                <div class="py-6 px-5 lg:flex">
                    <div class="flex-1 lg:mr-8">
                        <img src="/images/illustration-1.png" alt="Blog Post illustration" class="rounded-xl">
                    </div>

                    <div class="flex-1 flex flex-col justify-between">
                        <header class="mt-8 lg:mt-0">
                            <div class="space-x-2">
                                <a href="{{$category_name}}"
                                   class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                                   style="font-size: 10px">{{ $category_name}}</a>
                                   <a href="/"
                                   class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                                   style="font-size: 10px;color:blue">Back</a>


                            </div>

                            <div class="mt-4">
                                <h1 class="text-3xl">
<a href="">
                                  <a href='post/{{$category->slug}}'> {{$category->title}}</a>
</a>
                                </h1>
                                <h1>{{ $category->excerpt }}</h1>

                                <span class="mt-2 block text-gray-400 text-xs">
                                        Published <time>{{$category->created_at}}</time>
                                    </span>
                            </div>
                        </header>

                        <div class="text-sm mt-2">
                            <p>
                                {{$category->body}}

                            <p class="mt-4">
                                <!-- Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. -->
                            </p>
                        </div>

                        <footer class="flex justify-between items-center mt-8">
                            <div class="flex items-center text-sm">
                                <img src="/images/lary-avatar.svg" alt="Lary avatar">
                                <div class="ml-3">
                                    <h5 class="font-bold">{{$category->author}}</h5>
                                    <h6>CATEGORY: {{$category_name }}</h6>
                                </div>
                            </div>

                            <div class="hidden lg:block">
                                <!-- <a href="#"
                                   class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                                ></a> -->
                            </div>
                        </footer>
                    </div>
                </div>
            </article>






</main>

    <div class="lg:grid lg:grid-cols-3">

        <x-post-card />
        <x-post-card />
        <x-post-card />

    </div>

@endforeach
    </x-layout>
