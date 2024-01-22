<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\TestCase;


class ProductControllerTest extends TestCase
{
    use RefreshDatabase;

    public function productCategory()
    {
        // Arrange: Create a category and product
        $category = Category::factory()->create();
        $product = Product::factory()->create();

        // Attach the product to the category
        $category->products()->attach($product);

        // Act: Make a request to the productCategory method
        $response = $this->get(route('product-category', $category));

        // Assert: Check if the response has the correct status code
        $response->assertStatus(200);

        // Additional assertions as needed
        // Check if the view has the necessary variables
        $response->assertViewHas(['products', 'categories']);
    }
}
