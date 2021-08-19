<div>
    <div class="container pt-5">
        <div class="bg-white shadow-md rounded-md p-6 text-center md:text-left">
            <h3 class="font-semibold text-2xl font-sans">Filtrar por categoría</h3>
                <div class="space-x-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4">
                    @foreach ($categories as $category)
                        <a href="{{route('post.category', $category)}}" class="text-gray-300 text-center hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md cursor-pointer">{{$category->name}}</a>
                    @endforeach
                </div>
        </div>
    </div>
</div>
