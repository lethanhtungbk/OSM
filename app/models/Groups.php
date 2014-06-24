<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FiedTypes
 *
 * @author NhimXu
 */
class Groups extends Eloquent {

    //put your code here
    protected $table = 'sa__groups';
    protected $fillable = array('name');
    public $timestamps = false;
    public static $rules = array(
        'name' => 'required|min:5'        
    );
    
}

