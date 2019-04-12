<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RemoveUserModelTest extends TestCase
{
    /**
     * A basic test example.
     *@test
     * @return void
     */
    public function RemoveUser()
    {
        $response = $this->get('removeUser');

        $response->assertStatus(200);
        $response->assertSeeText('Success');
    }
}
