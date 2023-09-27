<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Product;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;
    
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testStoreProduct()
    {
        $response = Product::factory()->create();
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
