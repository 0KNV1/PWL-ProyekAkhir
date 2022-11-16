<?php

namespace Tests\Feature;

use App\Models\Produk;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProdukTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    use RefreshDatabase, WithFaker;

    public function test_access_page_without_user_auth()
    {
        $this->refreshDatabase();

        $response = $this->get('/produk-management/produk');

        $response->assertStatus(302);
    }

    public function test_access_page_with_user_auth()
    {
        $this->refreshDatabase();

        $user = User::firstWhere('email', 'superadmin@gmail.com');

        $response = $this->actingAs($user)->get('/produk-management/produk');

        $response->assertStatus(200);
    }

    public function test_create_new_product()
    {
        $this->refreshDatabase();

        $user = User::firstWhere('email', 'superadmin@gmail.com');

        $prod = Produk::create([
            'name' => $this->faker->name(),
            'price' => rand(10000, 100000),
            'image' => $this->faker->imageUrl(),
            'background' => $this->faker->imageUrl(),
            'stok' => rand(100, 1000),
            'desc' => $this->faker->paragraph(5),
        ]);

        $response = $this->actingAs($user)->get('/produk-management/produk');

        $response->assertSeeText($prod->name);
    }

    public function test_update_product()
    {
        $this->refreshDatabase();

        $user = User::firstWhere('email', 'superadmin@gmail.com');

        $prod = Produk::create([
            'name' => $this->faker->name(),
            'price' => rand(10000, 100000),
            'image' => $this->faker->imageUrl(),
            'background' => $this->faker->imageUrl(),
            'stok' => rand(100, 1000),
            'desc' => $this->faker->paragraph(5),
        ]);

        $response = $this->actingAs($user)->get('/produk-management/produk');

        $prod_update = Produk::find($prod->id);
        $prod_update->update([
            'name' => $this->faker->name()
        ]);

        $response_update = $this->actingAs($user)->get('/produk-management/produk');

        $response->assertSeeText($prod->name);
        $response_update->assertSeeText($prod_update->name);
    }

    public function test_delete_product()
    {
        $this->refreshDatabase();

        $user = User::firstWhere('email', 'superadmin@gmail.com');

        $prod = Produk::create([
            'name' => $this->faker->name(),
            'price' => rand(10000, 100000),
            'image' => $this->faker->imageUrl(),
            'background' => $this->faker->imageUrl(),
            'stok' => rand(100, 1000),
            'desc' => $this->faker->paragraph(5),
        ]);

        $response = $this->actingAs($user)->get('/produk-management/produk');

        $prod_update = Produk::find($prod->id);
        $prod_update->delete();

        $response_update = $this->actingAs($user)->get('/produk-management/produk');

        $response->assertSeeText($prod->name);
        $response_update->assertDontSeeText($prod_update->name);
    }
}
