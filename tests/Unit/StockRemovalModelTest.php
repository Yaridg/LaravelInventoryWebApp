<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class StockRemovalModelTest extends TestCase
{
    /**
 * A basic test example.
 *@test
 * @return void
 */
    public function RemoveStock()
    {
        $response = $this->get('removeStock');

        $response->assertStatus(200);
        $response->assertSeeText('Success');
    }

}
