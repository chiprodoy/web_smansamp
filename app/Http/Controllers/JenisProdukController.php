<?php

namespace App\Http\Controllers;

use App\Models\JenisProduk;
use Illuminate\Http\Request;

class JenisProdukController extends BackendController
{
    public $modelRecords=JenisProduk::class;
    public $indexURL='jenis_produk.index';
    public $editURL='jenis_produk.edit';
    public $deleteURL='jenis_produk.destroy';
    public $createURL='jenis_produk.create';
    public $storeURL='jenis_produk.store';
    public $showURL='jenis_produk.show';
    public $updateURL='jenis_produk.update';
    public $titleOfCreatePage='Tambah Jenis Produk';
    public $titleOfShowPage='Detail Jenis Produk';
    public $titleOfEditPage='Edit Jenis Produk';
    public $titleOfIndexPage='Jenis Produk';

}
