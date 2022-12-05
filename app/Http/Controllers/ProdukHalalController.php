<?php

namespace App\Http\Controllers;

use App\Models\ProdukHalal;
use Illuminate\Http\Request;

class ProdukHalalController extends BackendController
{
    public $modelRecords=ProdukHalal::class;
    public $indexURL='produk_halal.index';
    public $editURL='produk_halal.edit';
    public $deleteURL='produk_halal.destroy';
    public $createURL='produk_halal.create';
    public $storeURL='produk_halal.store';
    public $showURL='produk_halal.show';
    public $titleOfCreatePage='Tambah Produk Halal';
    public $titleOfShowPage='Detail Produk';
    public $titleOfEditPage='Edit Produk Halal';
    public $titleOfIndexPage='Produk Halal';
    //

}
