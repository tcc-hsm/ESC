<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;

    protected $guest;
    public $updated_at;
    public $created_at;
    

    //Creating the constructor
    public function __construct(){
        $this->guest = new Guest();
    }

    //Creating the functions to add the data to attributes
    public function setName($name){
        $this->guest->name = $name;
        return $this;
    }

    public function setEmail($email){
        $this->guest->email = $email;
        return $this;
    }

    public function setPhone($phone){
        $this->guest->phone = $phone;
        return $this;
    }

    public function setAddress($address){
        $this->guest->address = $address;
        return $this;
    }

    public function setEmergency_contact($emergency_contact){
        $this->guest->emergency_contact = $emergency_contact;
        return $this;
    }

    public function setBirthday($birthday){
        $this->guest->birthday = $birthday;
        return $this;
    }

    public function setZip_code($zip_code){
        $this->guest->zip_code = $zip_code;
        return $this;
    }

    public function setCity($city){
        $this->guest->city = $city;
        return $this;
    }

    public function setRegion($region){
        $this->guest->region = $region;
        return $this;
    }

    public function setCountry($country){
        $this->guest->country = $country;
        return $this;
    }

    //Creating Builder
    public function build()
    {
        return $this->guest;
    }

}
