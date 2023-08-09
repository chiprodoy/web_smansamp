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
        //
        PostCategory::create([
            'name' => 'Berita',
            'slugs' => 'berita'
        ]);

        PostCategory::create([
            'name' => 'Tentang Kami',
            'slugs' => 'about'
        ]);

        PostCategory::create([
            'name' => 'Prosedur & Regulasi',
            'slugs' => 'prosedur-dan-regulasi'
        ]);

    }
}
