<?php

namespace Tests\Unit;


use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;


class UserModelTest extends TestCase
{
    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function UserAdd()
    {
        $response = $this->get('addUser');

        $response->assertSeeText('Success');
        $response->assertStatus(200);
    }





}
