<x-app-layout>
    <div class="container py-8">
        <h1 class="text-4xl font-bold text-gray-600">
            {{$post->name}}
        </h1>
        <div class="text-lg text-gray-500 mb-2">
            {!!$post->extract!!}
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="lg:col-span-2">
                <figure>
                    @if ($post->image)
                        <img class="w-full h-80 object-cover object-center" src="{{Storage::url($post->image->url)}}" alt="">
                    @else
                        <img class="w-full h-80 object-cover object-center" src="https://cdn.pixabay.com/photo/2016/02/19/11/19/computer-1209641_960_720.jpg" alt="">
                    @endif
                </figure>

                <div class="text-base text-gray-500 mt-4 text-justify">
                    {!!$post->body!!}
                </div>
            </div>
            <aside>
                <h1 class="text-2xl font-bold text-gray-600 mb-4">Más en {{$post->category->name}}</h1>
                <ul>
                    @foreach ($similares as $similar)
                        <li class="mb-4 bg-white shadow-sm rounded-lg">
                            <a class="flex items-center" href="{{route('post.show', $similar)}}">
                                @if ($similar->image)
                                    <img class="mr-2 h-20 object-cover object-center rounded-l-md" src="{{Storage::url($similar->image->url)}}">
                                @else
                                    <img class="mr-2 h-20 object-cover object-center rounded-l-md" src="https://cdn.pixabay.com/photo/2016/02/19/11/19/computer-1209641_960_720.jpg">
                                @endif
                                <span class="text-gray-600">{{$similar->name}}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </aside>
        </div>
    </div>
</x-app-layout>