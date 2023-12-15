<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserAccountsController extends Controller
{
    public function index(){
        $user = User::paginate(15);

        return view('Dashboard.Accounts.accounts',[
            'users' => $user
        ]);
    }
}
