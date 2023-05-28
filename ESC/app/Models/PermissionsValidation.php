<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DB;
use Auth;

class PermissionsValidation extends Model
{
    use HasFactory;
   // protected $UsersProfile;
   // protected $PermissionsId;

    public function __construct($profile, $permission){

        //dd($profile);

        if($profile == "MASTER"){
            return true;
        }

        //Making sure the user has permission to
        $select = DB::select("SELECT T03.id_permission FROM users T01 
        INNER JOIN db_profile T02 on T01.profile = T02.profile
        INNER JOIN db_permission_report T03 on T02.id = T03.id_profile
        where T01.profile = ? and T03.id_permission = $permission;", [$profile]);

        if($select){
            return true;
        }else{
            return false;
        }
    }

    
}
