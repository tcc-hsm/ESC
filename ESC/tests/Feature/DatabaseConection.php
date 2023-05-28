<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use BD;

class DatabaseConection extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        try{

        $select = BD::select("select * from users;");
        $response->assertStatus(200);

        }catch(\Exception $e){
            return $e;
        }

    }
}
