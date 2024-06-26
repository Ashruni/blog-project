<x-layout >

@foreach($dataCollections as $dataCollection)
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
                                <a href=""
                                   class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                                   style="font-size: 10px">{{ $dataCollection->title}}</a>
                                   <a class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold" href="/edit/{{$dataCollection->slug}}">EDIT</a>
                                   <a class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold" href="/delete/{{$dataCollection->slug}}">DELETE</a>
                                   <a class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold" href="/">BACK</a>


                            </div>

                            <div class="mt-4">
                                <h1 class="text-3xl">
<a href="">
                                   {{$dataCollection->title}}

</a>
                                </h1>
                                {{$dataCollection->excerpt}}
                                <!-- <h1>{{$dataCollection->excerpt}}</h1> -->

                                <span class="mt-2 block text-gray-400 text-xs">
                                        Published <time>{{$dataCollection->created_at}}</time>
                                    </span>
                            </div>
                        </header>

                        <div class="text-sm mt-2">
                            <p>
                                {{$dataCollection->body}}

                            <p class="mt-4">
                                <!-- Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. -->
                            </p>
                        </div>
                        <a href=""></a>

                        <footer class="flex justify-between items-center mt-8">
                            <div class="flex items-center text-sm">
                                <img src="/images/lary-avatar.svg" alt="Lary avatar">
                                <div class="ml-3">
                                    <h5 class="font-bold">{{$dataCollection->excerpt}}</h5>
                                    <h6>CATEGORY: {{$dataCollection->excerpt }}</h6>
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
