<?php

use App\Category;
use App\Product;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('categories')->delete();
        DB::table('products')->delete();

        factory(User::class)->create([
            'email' => 'team@devsquad.com',
        ]);

        factory(Category::class, 2)->create()->each(function($category) {
            factory(Product::class,10)->create(['category_id' => $category->id]);
        });
    }
}
