<div class="w-[70%] mb-[10px] overflow-hidden">
    <div class="w-[100%] mb-[10px] h-[50px] rounded flex justify-between items-center">
        <div>
            <input class="app" wire:change.debounce="applyFilter" wire:model="search" type="text" placeholder="Search...">
        </div>
        <div>
            <label class="mx-[10px]">Sort</label>
            <select class="app" wire:change.debounce="applyFilter" wire:model="sort">
                <option value="updated_at">Publish date</option>
                <option value="title">Title</option>
            </select>
            <select class="app" wire:change.debounce="applyFilter" wire:model="order">
                <option value="desc">Descending</option>
                <option value="asc">Ascending</option>
            </select>
        </div>
    </div>
    <div class="rounded w-[100%] mb-[10px]">
        @foreach($articles as $article)
            <a href="/blog/{{ $article->slug }}"
               class="rounded overflow-hidden bg-[#2f2f2f] hover:bg-[#3b3b3b] flex w-[100%] mb-[10px] h-[200px] text-white">
                <div class="w-[250px] h-[100%] flex items-center justify-center bg-gray-700">
                    @if($article->banner)
                        <img class="w-[100%] h-[100%] object-cover" src="/ArticleBanners/{{$article->banner}}">
                    @else
                        <i class="bi bi-image-fill text-[100px]"></i>
                    @endif
                </div>
                <div class="w-[calc(100%-200px)] h-[100%] px-[20px] flex flex-col justify-center">
                    <h3 class="py-[5px] underline">{{ $article->title  }}</h3>
                    <p class="text-sm my-[10px] line-clamp-3">{{ $article->description  }}</p>
                    <ul class="flex space-x-2">
                        <li title="Published By" class="h-[20px] mx-[5px] flex items-center justify-center">
                            <i class="bi bi-person-fill text-[23px] text-[gray] mx-[5px]"></i>
                            <p class="text-sm">{{ $article->user ? $article->user->username : ""   }}</p>
                        </li>
                        <li title="Publish Time" class="h-[20px] mx-[5px] flex items-center justify-center">
                            <i class="bi bi-calendar-fill text-[18px] text-[gray] mx-[5px]"></i>
                            <p class="text-sm">{{ $article->updated_at  }}</p>
                        </li>
                        <li title="Publish Time" class="h-[20px] mx-[5px] flex items-center justify-center">
                            <i class="bi bi-clock-fill text-[16px] text-[gray] mx-[5px]"></i>
                            <p class="text-sm">5 min read</p>
                        </li>
                    </ul>
                </div>
            </a>
        @endforeach
    </div>
    <div class="w-[100%] px-[20px] mb-[10px] h-[50px] rounded">
        {{ $articles->links() }}
    </div>
</div>
