<div class="bg-gray-900 rounded">
    <h3 class="p-[10px] border-b">Related</h3>
    <ul class="p-[5px] mb-[10px]">
        @foreach($related as $article)
            <a href="/blog/{{ $article->slug }}"
               class="rounded overflow-hidden bg-[#2f2f2f] hover:bg-[#3b3b3b] flex w-[100%] mb-[10px] h-[100px] text-white">
                <div class="w-[120px] h-[100%] flex items-center justify-center bg-gray-700">
                    @if($article->banner)
                        <img class="w-[100%] h-[100%] object-cover" src="/ArticleBanners/{{$article->banner}}">
                    @else
                        <i class="bi bi-image-fill text-[100px]"></i>
                    @endif
                </div>
                <div class="w-[calc(100%-120px)] h-[100%] px-[10px] flex flex-col justify-center">
                    <p class="py-[5px] line-clamp-1">{{ $article->title  }}</p>
                    <ul class="flex flex-col items-start">
                        <li title="Published By" class="flex items-center justify-center">
                            <i class="bi bi-person-fill text-[20px] text-[gray] mx-[5px]"></i>
                            <p class="text-sm line-clamp-1">{{ $article->user ? $article->user->username : ""   }}</p>
                        </li>
                        <li title="Publish Time" class="flex items-center justify-center">
                            <i class="bi bi-clock-fill text-[16px] text-[gray] mx-[5px]"></i>
                            <p class="text-sm">5 min read</p>
                        </li>
                    </ul>
                </div>
            </a>
        @endforeach()
    </ul>
</div>
