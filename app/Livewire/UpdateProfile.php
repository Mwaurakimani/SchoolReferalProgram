<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Locked;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateProfile extends Component
{
    use WithFileUploads;

    #[Locked]
    public $id;

    public $username;
    public $email;
    public $first_name;
    public $last_name;
    public $photo;

    public $current_photo;


    public function mount(){
        $username = request()->username;

        $user = User::where('username',$username)->firstOrFail();

        $this->fill($user->only('id','username','email','first_name','last_name'));

        if($user->profile_photo_path){
            $this->current_photo = $user->profile_photo_path;
        }
    }

    public function render()
    {
        return view('livewire.update-profile');
    }

    public function updateUser(){
        //authorize
        Gate::allowIf(fn() =>  ($this->id == Auth::user()->id) || (Auth::user()->account_type == 'Administrator' || Auth::user()->account_type == 'Super Administrator'));

        //validate
        if(Auth::user()->account_type != 'Administrator' || Auth::user()->account_type == 'Super Administrator'){
            $validated = Validator::make([
                'username' => $this->username,
                'email' => $this->email,
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'photo' => $this->photo,
            ], [
                'username' => ['required', 'min:3', 'alpha_dash:ascii', Rule::unique('users', 'username')->ignore(Auth::user()->id),],
                'email' => ['required', 'email', Rule::unique('users', 'email')->ignore(Auth::user()->id)],
                'first_name' => ['nullable', 'min:3'],
                'last_name' => ['nullable', 'min:3'],
                'photo' => ['nullable', "image", "mimes:jpeg,png,gif", "max:2048"],
            ])->setAttributeNames([
                'username' => 'Username',
                'email' => 'Email',
                'first_name' => 'First Name',
                'last_name' => 'Last Name',
                'photo' => 'Photo'
            ])
                ->validate();
        }

        $user  = User::where('id',$this->id)->firstOrfail();

        if($user){
            $user->fill([
                'username' => $this->username,
                'email' => $this->email,
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
            ]);
        }

        if ($this->photo != null){
            $user->profile_photo_path = $this->performUpload();
        }else if($this->current_photo == null){
            $user->profile_photo_path = null;
        }

        $user->save();
        $user->refresh();

        return $this->redirect('/dashboard/account/'.$user->username);
    }

    public function removeImage(){$this->photo = null;}

    public function clearImage(){
        $this->current_photo = null;
    }


    private function performUpload()
    {
        $path = $this->photo->store('', 'ProfilePictures');
        return $path;
    }

}
