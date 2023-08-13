<?php

namespace Database\Seeders;

use App\Models\PostCategory;
use Illuminate\Database\Seeder;

class PostCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
        PostCategory::create([
            'uuid'=>'-',
            'name' => 'Berita',
            'slugs' => 'berita'
        ]);
        // 2
        PostCategory::create([
            'uuid'=>'-',
            'name' => 'Tentang Kami',
            'slugs' => 'about'
        ]);
        // 3
        PostCategory::create([
            'uuid'=>'-',
            'name' => 'Prosedur Dan Regulasi',
            'slugs' => 'prosedur-dan-regulasi'
        ]);

        // 4
        PostCategory::create([
            'uuid'=>'-',
            'name' => 'headline',
            'slugs'=>'headline'
        ]);

    }
}
