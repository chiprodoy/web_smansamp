<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      /*
        Menu::create([
            'label' => 'Dashboard',
            'mod_name'=>'dashboard',
            'sort_order'=>1
        ]);
       */
        Menu::create([
            'label' => 'Berita',
            'mod_name'=>'http://localhost:8000/admin/browse/berita',
            'sort_order'=>2
        ]);

        Menu::create([
            'label' => 'Pengumuman',
            'mod_name'=>'http://localhost:8000/admin/browse/pengumuman',
            'sort_order'=>3
        ]);

        Menu::create([
            'label' => 'Profil',
            'mod_name'=>'http://localhost:8000/admin/browse/profil',
            'sort_order'=>4
        ]);

        Menu::create([
            'label' => 'Fasilitas',
            'mod_name'=>'http://localhost:8000/admin/browse/fasilitas',
            'sort_order'=>5
        ]);

        Menu::create([
            'label' => 'Prestasi',
            'mod_name'=>'http://localhost:8000/admin/browse/prestasi',
            'sort_order'=>6
        ]);

        Menu::create([
            'label' => 'Kerjasama',
            'mod_name'=>'http://localhost:8000/admin/browse/kerja-sama',
            'sort_order'=>7
        ]);
        //
    }
}
