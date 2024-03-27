<x-layout >
@foreach($categoryPost as $category)

<h1>{{ $category_name}}</h1>
    {{ $category->category_id }}
    <article class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
    <div class="mt-8 flex flex-col justify-between">
                            <header>
                                <div class="space-x-2">
                                    <a 
                                       class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                                       style="font-size: 10px">{{$category->category_id}}</a>
                                </div>
                            </header>

    </article>

@endforeach
    </x-layout>
