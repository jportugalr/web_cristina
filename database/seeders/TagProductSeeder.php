<?php

namespace Database\Seeders;

use App\Models\TagProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TagProduct::factory(140)->create();
    }
}
