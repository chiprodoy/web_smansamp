<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\PostStatus;
use App\Models\PostType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 20 random news
        Post::factory()
        ->count(20)
        ->create()->each(function($post){
            $post->categories()->attach(1,['user_modify'=>'su']);
        });

        // Tentang Kami
        $visi=Post::create([
            'title'=>'Visi Dan Misi',
            'description'=>fake()->paragraphs(3,true),
             'post_status'=> PostStatus::PUBLISH, //publish
             'post_type' => PostType::PAGE, // blog,page,multimedia
             'slug'=>'',
             'uuid'=>'',
             'author'=>'admin'
        ]);

        $visi->categories()->attach(2,['user_modify'=>'su']);

            // sejarah
        $sejarah=Post::create([
            'title'=>'Sejarah',
            'description'=>fake()->paragraphs(3,true),
            'post_status'=> PostStatus::PUBLISH, //publish
            'post_type' => PostType::PAGE, // blog,page,multimedia
            'slug'=>'',
            'uuid'=>'',
            'author'=>'admin'
        ]);

        $sejarah->categories()->attach(2,['user_modify'=>'su']);

        $nilai=Post::create([
            'title'=>'Nilai - Nilai',
            'description'=>fake()->paragraphs(3,true),
             'post_status'=> PostStatus::PUBLISH, //publish
             'post_type' => PostType::PAGE, // blog,page,multimedia
             'slug'=>'',
             'uuid'=>'',
             'author'=>'admin'
        ]);

        $nilai->categories()->attach(2,['user_modify'=>'su']);

        $kontak=Post::create([
            'title'=>'Kontak',
            'description'=>fake()->paragraphs(3,true),
             'post_status'=> PostStatus::PUBLISH, //publish
             'post_type' => PostType::PAGE, // blog,page,multimedia
             'slug'=>'',
             'uuid'=>'',
             'author'=>'admin'
        ]);

        $kontak->categories()->attach(2,['user_modify'=>'su']);

        $strukturOrganisasi=Post::create([
            'title'=>'Struktur Organisasi',
            'description'=>fake()->paragraphs(3,true),
             'post_status'=> PostStatus::PUBLISH, //publish
             'post_type' => PostType::PAGE, // blog,page,multimedia
             'slug'=>'',
             'uuid'=>'',
             'author'=>'admin'
        ]);

        $strukturOrganisasi->categories()->attach(2,['user_modify'=>'su']);

        // Prosedur Regulasi

        $prosedur=Post::create([
            'title'=>'Regulasi Halal Indonesia',
            'description'=>fake()->paragraphs(3,true),
             'post_status'=> PostStatus::PUBLISH, //publish
             'post_type' => PostType::PAGE, // blog,page,multimedia
             'slug'=>'',
             'uuid'=>'',
             'author'=>'admin'
        ]);

        $prosedur->categories()->attach(3,['user_modify'=>'su']);

        $prosedur=Post::create([
            'title'=>'Regulasi LPPOM MUI',
            'description'=>fake()->paragraphs(3,true),
             'post_status'=> PostStatus::PUBLISH, //publish
             'post_type' => PostType::PAGE, // blog,page,multimedia
             'slug'=>'',
             'uuid'=>'',
             'author'=>'admin'
        ]);

        $prosedur->categories()->attach(3,['user_modify'=>'su']);

        $prosedur=Post::create([
            'title'=>'Prosedur Pasar Indonesia',
            'description'=>fake()->paragraphs(3,true),
             'post_status'=> PostStatus::PUBLISH, //publish
             'post_type' => PostType::PAGE, // blog,page,multimedia
             'slug'=>'',
             'uuid'=>'',
             'author'=>'admin'
        ]);

        $prosedur->categories()->attach(3,['user_modify'=>'su']);

        $prosedur=Post::create([
            'title'=>'Pendaftaran Sertifikat Halal',
            'description'=>fake()->paragraphs(3,true),
             'post_status'=> PostStatus::PUBLISH, //publish
             'post_type' => PostType::PAGE, // blog,page,multimedia
             'slug'=>'',
             'uuid'=>'',
             'author'=>'admin'
        ]);

        $prosedur->categories()->attach(3,['user_modify'=>'su']);

        $prosedur=Post::create([
            'title'=>'Prosedur Pasar Luar Negri',
            'description'=>fake()->paragraphs(3,true),
             'post_status'=> PostStatus::PUBLISH, //publish
             'post_type' => PostType::PAGE, // blog,page,multimedia
             'slug'=>'',
             'uuid'=>'',
             'author'=>'admin'
        ]);

        $prosedur->categories()->attach(3,['user_modify'=>'su']);

        $prosedur=Post::create([
            'title'=>'Prosedur Keluhan Dan Banding',
            'description'=>fake()->paragraphs(3,true),
             'post_status'=> PostStatus::PUBLISH, //publish
             'post_type' => PostType::PAGE, // blog,page,multimedia
             'slug'=>'',
             'uuid'=>'',
             'author'=>'admin'
        ]);

        $prosedur->categories()->attach(3,['user_modify'=>'su']);
    }
}
