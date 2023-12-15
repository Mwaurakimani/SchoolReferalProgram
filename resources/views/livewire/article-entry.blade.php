<div>
    @if($mode == 'create')
        <form wire:submit="create"
              class="w-[100%] mb-[20px] pt-[20px] px-[30px] bg-gray-900 border-1 border-gray-900 relative pb-[20px] rounded"
              style="z-index: 100;" id="update_form">
            @csrf
            @method('POST')
            <h4 class="p-[10px] mb-[10px]">Create Article</h4>
            <div class="flex flex-col mb-[20px] items-stretch md:flex-row md:space-x-2 px-[10px]">
                <div class="w-[300px] flex space-x-2">
                    <label>Banner</label>
                    <input wire:model="photo" type="file">
                </div>
                <div class="w-[calc(100%_-_300px)] max-h-[300px]">
                </div>
            </div>
            <div class="container">
                <div class="form-group mb-[20px]">
                    <label for="title">Title</label>
                    <input type="text" class="form-control app" id="title" aria-describedby="TitleHelp"
                           wire:model="title"
                           placeholder="Title" value="{{ old('title')}}">
                    @error('title')
                    <small id="DescriptionHelp" class="form-text text-sm error">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group mb-[20px]">
                    <label for="Description">Description</label>
                    <textarea class="form-control app !h-[100px]" id="Description" aria-describedby="DescriptionHelp"
                              wire:model="description"></textarea>
                    @error('description')
                    <small id="DescriptionHelp" class="form-text text-sm error">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="flex justify-end px-[30px]">
                <button class="app" type="submit" form="update_form">Create</button>
            </div>
        </form>
    @elseif($mode == 'update')
        <form wire:submit="update"
              class="w-[100%] mb-[20px] pt-[20px] px-[30px] bg-gray-900 border-1 border-gray-900 relative pb-[20px] rounded"
              style="z-index: 100;" id="update_form">
            @csrf
            @method('POST')
            <h4 class="p-[10px] mb-[10px]">Create Article</h4>
            <div class="flex flex-col mb-[20px] items-stretch md:flex-row md:space-x-2 px-[10px]">
                <div class="w-[300px] flex space-x-2">
                    <label>Change Banner</label>
                    <input wire:model="photo" type="file">
                </div>
                <div class="w-[calc(100%_-_300px)] max-h-[300px]">
                    @if(isset($banner))
                        <img class="w-[100%] h-[100%] object-contain" src="/ArticleBanners/{{$banner}}">
                    @else
                        <i class="bi bi-image-fill text-[100px]"></i>
                    @endif
                </div>
            </div>
            <div class="container">
                <div class="form-group mb-[20px]">
                    <label for="title">Title</label>
                    <input type="text" class="form-control app" id="title" aria-describedby="TitleHelp"
                           wire:model="title"
                           placeholder="Title" value="{{ old('title')}}">
                    @error('title')
                    <small id="DescriptionHelp" class="form-text text-sm error">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group mb-[20px]">
                    <label for="Description">Description</label>
                    <textarea class="form-control app !h-[100px]" id="Description" aria-describedby="DescriptionHelp"
                              wire:model="description"></textarea>
                    @error('description')
                    <small id="DescriptionHelp" class="form-text text-sm error">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="flex justify-end px-[30px] space-x-2">
                <button class="app" type="button" wire:click="delete" form="update_form">Delete</button>
                <button class="app" type="submit" form="update_form">Update</button>
            </div>
        </form>
    @endif
</div>

