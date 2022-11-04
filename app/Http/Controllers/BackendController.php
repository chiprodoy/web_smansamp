<?php

namespace App\Http\Controllers;

use MF\Controllers\BreadCrumb;
use MF\Controllers\DataTable;
use MF\Controllers\Page;
use MF\Controllers\PageMenu;

class BackendController extends Controller
{
    use PageMenu,DataTable,BreadCrumb;
    public $modelRecords;
    public $editURL;
    public $deleteURL;
    public $createURL;
    public $showURL;


    public function __construct()
    {
        $this->menuModel=\App\Models\Menu::class;
        $this->getBackEndMenu();
        $this->BREADCRUMB_ITEM=[
            new Page('Home',route('dashboard'))
        ];
    }

    public function viewRecord(){
        $this->modelRecords=$this->modelRecords::orderBy('id','desc');
        $this->modelRecords->paginate($this->RECORD_PER_PAGE);
    }

}


