<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use MF\Controllers\Page;

class PostController extends BackendController
{
    public $modelRecords=Post::class;

    public function index(){
        $this->CURRENT_PAGE=new Page('Post',route('post.index'));
        $this->TABLE_COL_HEADER=Post::$columns;
        $this->setBreadCrumb();
        $this->editURL='post.edit';
        $this->deleteURL='post.destroy';
        $this->createURL=route('post.create');
        $this->showURL='post.show';

        // $r=$this->modelRecords::orderBy('id','desc');
        // $this->TABLE_RECORDS=$r->paginate($this->RECORD_PER_PAGE);
        // //dd($this->TABLE_RECORDS);
        // return $this->TABLE_RECORDS;
        return view('admin.post.index',get_object_vars($this));
    }
    //
}
