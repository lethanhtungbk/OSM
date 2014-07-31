<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EntityValues
 *
 * @author NhimXu
 */
class EntityValues extends Eloquent {

    //put your code here
    protected $table = 'sa__object_property_values';
    public $timestamps = false;
    public static $rules = array(
    );
    
}

