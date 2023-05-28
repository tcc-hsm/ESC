<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('db_guest_registration', function (Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('emergency_contact')->unique()->nullable();
            $table->string('address');
            $table->string('birthday');
            $table->string('zip_code');
            $table->string('city');
            $table->string('region');
            $table->string('country');
            $table->string('created_at')->nullable();
            $table->string('updated_at')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('db_guest_registration');

    }
};
