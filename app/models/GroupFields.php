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
class GroupFields extends Eloquent {

    //put your code here
    protected $table = 'sa__group_fields';
    protected $fillable = array('group_id','field_id');
    public $timestamps = false;
    public static $rules = array(
    );
    
}

