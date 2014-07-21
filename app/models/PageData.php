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
    function __construct() {
       $this->data = new stdClass();
       $this->data->save = '';
       $this->data->back = '';
       $this->data->fields = null;
   }
    //put your code here
    public $data;
}
