<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Http\Livewire\User\Create;
use App\Models\User;


class Create extends Component
{
    public function render(Request $request)
    {
        //dd("Morreu");
        $user = new User();

        $user->name = $request->input("name");
        $user->email = $request->input("email");
        $user->profile = $request->input("profile");
        $user->password = $request->input("password");

        $user->save();

        return view('dashboard');

    }
}
