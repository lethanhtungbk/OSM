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
class GroupRules extends Eloquent {

    //put your code here
    protected $table = 'sa__group_rules';
    protected $fillable = array('field_order_in_list','field_order_in_detail','field_order_in_filter');
    public $timestamps = false;
    public static $rules = array(
    );
    
}

