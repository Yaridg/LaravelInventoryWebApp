<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class StockAdditionModelTest extends TestCase
{
    /**
     * A basic test example.
     *@test
     * @return void
     */
//    public function AddStock()
//    {
//        $response = $this->get('addStockForm');
//
//        $response->assertStatus(200);
//        $response->assertSeeText('Success');
//
//    }

    public function AddScan()
    {
        $response = $this->get('addScan');

        $response->assertStatus(200);
        $response->assertSeeText('Success');
    }
}
