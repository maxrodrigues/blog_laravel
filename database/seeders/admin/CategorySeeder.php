<?php

namespace Database\Seeders\admin;

use App\Models\admin\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory()->times(10)->create();
    }
}
