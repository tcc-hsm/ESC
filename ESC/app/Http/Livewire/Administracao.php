<?php

namespace App\Http\Livewire;

use Livewire\Component;
use DB;
use Auth;


class Administracao extends Component
{
    public function render()
    {
        $userPermission = DB::select("SELECT T03.id_permission FROM users T01 
        INNER JOIN db_profile T02 on T01.profile = T02.profile
        INNER JOIN db_permission_report T03 on T02.id = T03.id_profile
        where T01.profile = ? and T03.id_permission = 1; ",[Auth::user()->profile]);

        if($userPermission || Auth::user()->profile == "MASTER" ){
            return view('livewire.administracao');
        }else{
            $message = [
                'erro' => "code: 1 - You don't have permission to open the administration's page"
            ];
            
            return view('livewire.erro.no-permission', ['message'=> $message]);
        }

    }
}
