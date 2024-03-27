<x-layout >
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-2 bg-gray-100 border border-gray-200 p-6 rounded-xl" >
            <h1 class="text-center font-bold text-xl">post something !</h1>
            <form method="POST" action="/create/post" class="mt-10">
                @csrf
               <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-s text-grey-700" for="title">Title</label>
                <input class="border border-grey-400 p-2 w-full" type="text" name="title" id="title" value="{{ old('title') }}" required>
                @error('title')
                        <p class="text-red-500 text-xs mb-1">{{ $message }}</p>
                @enderror
                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-s text-grey-700" for="author">Author</label>
                    <input class="border border-grey-400 p-2 w-full" type="text" name="author" id="author" value="{{ old('author') }}" required>
                    @error('author')
                        <p class="text-red-500 text-xs mb-1">{{ $message }}</p>
                    @enderror
</div>
<div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-s text-grey-700" for="slug">Slug</label>
                    <input class="border border-grey-400 p-2 w-full" type="text" name="slug" id="slug" value="{{ old('slug') }}" required>
                    @error('slug')
                        <p class="text-red-500 text-xs mb-1">{{ $message }}</p>
                    @enderror
</div>
<div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-s text-grey-700" for="excerpt">Excerpt</label>
                    <input class="border border-grey-400 p-2 w-full" type="text" name="excerpt" id="excerpt" value="{{ old('excerpt') }}" required>
                    @error('excerpt')
                        <p class="text-red-500 text-xs mb-1">{{ $message }}</p>
                    @enderror
</div>
<div class="mb-6">
<label class="block mb-2 uppercase font-bold text-s text-grey-700" for="body">Body</label>
                    <input class="border border-grey-400 p-2 w-full" type="text" name="body" id="body" value="{{ old('excerpt') }}" required>
                    @error('body')
                        <p class="text-red-500 text-xs mb-1">{{ $message }}</p>
                    @enderror
</div>
<div class="mb-6">
                    <select name="category_id" id="category_id">
                        @foreach(\App\Models\Category::all() as $category)
                        <option value="{{$category->id}}">{{ucwords($category->name)}}</option>
                        @endforeach
                    </select>
                    <!-- <textarea class="border border-grey-400 p-2 w-full"  name="body" id="body" value="{{ old('body') }}" required></textarea> -->
                    @error('category_id')
                        <p class="text-red-500 text-xs mb-1">{{ $message }}</p>
                    @enderror

</div>
<div class="mb-6">
    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500" >Submit</button>
    </div>
    @if($errors->any())
    <ul>
    @foreach($errors->all() as $error)
    <li class="text-red-500">{{$error}}</li>
    @endforeach
</ul>
    @endif

            </form>

</main>
    </section>
</x-layout>
