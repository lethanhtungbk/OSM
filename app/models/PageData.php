<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PageData
 *
 * @author NhimXu
 */
class PageData {
    
    private $baseURL;
    private $tag;    
    
    public $data;
    
    private $tableModel;
    private $fieldModel;
    
    function __construct($baseURL = '',$tag = '') {
       $this->data = new stdClass();
       $this->data->save = '';
       $this->data->back = '';
       $this->data->fields = null;
       $this->baseURL = $baseURL;
       
       $this->tableModel = new TableModel();
       $this->fieldModel = new FieldModel();
       if ($tag != '')
       {
            $this->setTag($tag);
       }
   }
    
    public function setBase($baseURL)
    {
        $this->baseURL = $baseURL;
    }
    
    public function setTag($tag)
    {
        $this->tag = $tag;
        
        $realTag = $this->baseURL.'/'.$tag;
       
        $this->data->add = URL::to($realTag.'-add');
        $this->data->top_action = array(
            array('url' => URL::to($realTag.'-add'), 'label'=>'New', 'class'=>'fa-plus'),
            array('url' => URL::to($realTag), 'label'=>'Remove', 'class'=>'fa-minus'),
        );
        $this->data->edit = URL::to($realTag.'-edit');
        $this->data->save = URL::to($realTag.'-save');        
        $this->data->back = URL::to($realTag);        
    }
    
    public $isListView = true;
    
    public function getView()
    {
        return ($this->isListView)?View::make('ui.object-list', array('pageData' => $this)):View::make('ui.object-detail', array('pageData' => $this));
    }
    
    public function setListViewMode($value,$id = null)
    {
        $this->isListView = $value;      
        
        if ($this->isListView)
        {
            $this->setTable($this->tableModel->getTable($this->tag));
        }
        else
        {
            $this->setFields($this->fieldModel->getFields($this->tag,$id));
        }            
    }    
    
    private function setTable($table)
    {
        if ($table != null)
        {
            if (property_exists($table, 'columns'))
            {
                $this->data->columns = $table->columns;        
            }
            
            if (property_exists($table, 'records'))
            {
                $this->data->records = $table->records;
            }           
        }
    }
    
    private function setFields($fields)
    {
        $this->data->fields = $fields;        
    }
}
