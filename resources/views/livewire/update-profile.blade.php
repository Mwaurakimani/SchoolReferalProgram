<form wire:submit="updateUser" class="w-[100%] mb-[20px] pt-[10px] bg-gray-900 border-1 border-gray-900 relative pb-[20px] rounded"
      style="z-index: 100;" id="update_form">
    @csrf
    @method('POST')
    <h4 class="p-[10px] mb-[10px]">Edit Profile</h4>
    <div class="flex flex-col md:flex-row md:space-x-2 px-[10px]">
        <div class="w-[90%] md:w-[300px] mx-[auto] mb-[20px] h-[300px] rounded">
            @if ($photo)
                <div class="w-[100%] h-[100%] bg-grey-500 relative">
                    <img src="{{ $photo->temporaryUrl() }}"  class="w-[100%] h-[100%] object-contain object-center">
                    <div class="absolute top-0 left-0  w-[100%] h-[100%] bg-black opacity-[0] hover:opacity-[0.8] flex flex-col items-center justify-center">
                        <label for="photo" class="block w-[fit-content] py-[5px] px-[8px] border-1 mb-[10px]">Change Image</label>
                        <button class="block w-[fit-content] py-[5px] px-[8px] border-1" type="button" wire:click="removeImage">Remove Image</button>
                    </div>
                </div>
            @elseif(isset($current_photo))
                <div class="w-[100%] h-[100%] bg-grey-500 relative">
                    <img src="/ProfilePictures/{{ $current_photo }}"  class="w-[100%] h-[100%] object-contain object-center">
                    <div class="absolute top-0 left-0  w-[100%] h-[100%] bg-black opacity-[0] hover:opacity-[0.8] flex flex-col items-center justify-center">
                        <label for="photo" class="block w-[fit-content] py-[5px] px-[8px] border-1 mb-[10px]">Change Image</label>
                        <button class="block w-[fit-content] py-[5px] px-[8px] border-1" type="button" wire:click="clearImage">Remove Image</button>
                    </div>
                </div>
            @else
                <label for="photo" class="w-[100%] h-[100%] border-4 border-dashed border-gray-400 flex flex-col items-center justify-center rounded bg-gray-700">
                    <p>Drop Image here to upload Or</p>
                    <p>Click to select image</p>
                </label>
            @endif

            <input type="file" class="hidden" id="photo" accept="image/*" wire:model="photo">

            @error('photo')
                <small id="emailHelp" class="form-text text-sm error">{{$message}}</small>
            @enderror
        </div>
        <div class="w-[90%] md:pl-[20px] display-container mx-[auto] md:w-[calc(100%_-_300px)]">
            <div class="signup-form w-[500px] mx-[auto] rounded">
                <div class="form-group mb-[20px]">
                    <label for="username">Username</label>
                    <input type="text" class="form-control app" id="username" wire:model="username"
                           aria-describedby="emailHelp"
                           placeholder="Username" value="{{ old('username')}}">
                    @error('username')
                    <small id="emailHelp" class="form-text text-sm error">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group mb-[20px]">
                    <label for="email">Email</label>
                    <input type="email" class="form-control app" id="email" aria-describedby="emailHelp"
                           wire:model="email"
                           placeholder="Email" value="{{ old('email')}}">
                    @error('email')
                    <small id="emailHelp" class="form-text text-sm error">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group mb-[20px]">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control app" id="first_name" wire:model="first_name"
                           aria-describedby="first_nameHelp"
                           placeholder="Last Name" value="{{ old('first_name')}}">
                    @error('first_name')
                    <small id="first_nameHelp" class="form-text text-sm error">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group mb-[20px]">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control app" id="last_name" wire:model="last_name"
                           aria-describedby="last_nameHelp"
                           placeholder="Last Name" value="{{ old('last_name')}}">
                    @error('last_name')
                    <small id="last_nameHelp" class="form-text text-sm error">{{$message}}</small>
                    @enderror
                </div>
                <div class="px-[30px] mb-[20px]">
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-end px-[30px]">
        <button class="app" type="submit" form="update_form">Update</button>
    </div>
</form>
