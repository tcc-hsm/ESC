<?php

namespace App\Http\Livewire\Guest;

use Livewire\Component;
use App\Models\guestregistration;
use App\Models\Guest;
use App\Models\PermissionsValidation;
use Illuminate\Http\Request;
use DB;
use Auth;

class Registration extends Component
{
    #region render
    public function render()
    {

        $userPermission = DB::select("SELECT T03.id_permission FROM users T01 
        INNER JOIN db_profile T02 on T01.profile = T02.profile
        INNER JOIN db_permission_report T03 on T02.id = T03.id_profile
        where T01.profile = ? and T03.id_permission = 2; ",[Auth::user()->profile]);

        if($userPermission || Auth::user()->profile == "MASTER" ){
            return view('livewire.guest.registration');
        }else{
            $message = [
                'erro' => "code: 2 - You don't have permission to open the guest registration's page"
            ];
            
            return view('livewire.erro.no-permission', ['message'=> $message]);
        }

    }
    #endregion

    #region Register
    public function create(Request $request)
    {

        //Making sure the user has permission to
        //$userPermission = DB::select("SELECT T03.id_permission FROM users T01 
        //INNER JOIN db_profile T02 on T01.profile = T02.profile
        //INNER JOIN db_permission_report T03 on T02.id = T03.id_profile
        //where T01.profile = ? and T03.id_permission = 3; ",[Auth::user()->profile]);

        //if($userPermission || Auth::user()->profile == "MASTER" ){

        $validation = new PermissionsValidation(Auth::user()->profile, 3);

        if($validation){
         //Trying to create the Guest
        try{

        // //dd($request->input('name'));
        //
        // $guest = new guestregistration;
        //
        // $guest->setname = $request->input('name');
        // $guest->setemail = $request->input('email');
        // $guest->setphone = $request->input('phone');
        // $guest->setaddress = $request->input('address');
        // $guest->setzip_code = $request->input('zip_code');
        // $guest->setcity = $request->input('city');
        // $guest->setregion = $request->input('region');
        // $guest->setcountry = $request->input('country');
        // $guest->setbirthday = $request->input('birthday');
        //
        // $guest->save();

        $guestRegistration = (new Guest())
        ->setName($request->input('name'))
        ->setEmail($request->input('email'))
        ->setPhone($request->input('phone'))
        ->setAddress($request->input('address'))
        ->setZip_code($request->input('zip_code'))
        ->setCity($request->input('city'))
        ->setRegion($request->input('region'))
        ->setCountry($request->input('country'))
        ->setBirthday($request->input('birthday'))
        ->builder();

        $guestRegistration->save();

        return redirect('/guest_registration');


        }catch(\Exception $e){
            dd($e);
        }


        }else{
            $message = [
                'erro' => "code: 2 - You don't have permission to create the guest registration"
            ];
            
            return view('livewire.erro.no-permission', ['message'=> $message]);
        }


    }

    #endregion

}
