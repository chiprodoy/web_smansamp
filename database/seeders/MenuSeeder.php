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
        Menu::create([
            'label' => 'Dashboard',
            'mod_name'=>'dashboard',
            'sort_order'=>1
        ]);

        Menu::create([
            'label' => 'Berita',
            'mod_name'=>'http://localhost/lppom_mui/public/admin/browse/berita',
            'sort_order'=>2
        ]);

        Menu::create([
            'label' => 'Tentang Kami',
            'mod_name'=>'http://localhost/lppom_mui/public/admin/browse/about',
            'sort_order'=>3
        ]);

        Menu::create([
            'label' => 'Prosedur & Regulasi',
            'mod_name'=>'http://localhost/lppom_mui/public/admin/browse/prosedur-dan-regulasi',
            'sort_order'=>4
        ]);
        //
    }
}
