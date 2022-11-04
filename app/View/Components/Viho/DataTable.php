<?php

namespace App\View\Components\Viho;

use Illuminate\View\Component;

class DataTable extends Component
{

    /*
     * Tabel Coloumn.
     *
     */
    public $column;
    /*
     * data.
     *
     */
    public $record;

    /*
     * total page.
     *
     */

     public $totalPage;
    /*
     * current page.
     *
     */

     public $currentPage=1;
    /*
     * total record.
     *
     */
    public $totalRecord;
    /*
     * total record.
     *
     */
    public $recordPerPage=10;
    /*
     * model class name.
     *
     */
    public $model;

    /*
     * model class name.
     *
     */
    public $editButton;
    /*
     * model class name.
     *
     */
    public $deleteButton;
  /**
       * Create a new component instance.
       * param $column
     *
     * @return void
     */
    public function __construct($model,$editButton=null,$deleteButton=null)
    {
        $this->column=$model::$columns;
        $this->model=$model;
        $this->editButton=$editButton;
        $this->deleteButton=$deleteButton;
        $this->record=$this->setRecord();
        //
    }

    protected function setRecord(){

        $r=$this->model::orderBy('id','desc');
        $this->totalRecord=$r->count();

        if($this->recordPerPage > 0){
            return $r->paginate($this->recordPerPage);
        }elseif($this->recordPerPage == 0){
            return $r->get();
        }

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.viho.data-table');
    }
}
