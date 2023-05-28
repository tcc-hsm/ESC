<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\User;

class Create extends Component
{
    public function render(Request $request)
    {
        dd("error");
        $user = new User();

        $user->name = $request->input("name");
        $user->email = $request->input("email");
        $user->profile = $request->input("profile");
        $user->password = $request->input("password");

        $user->save();

        return "202 - User created with sucessfully";

    }
}
