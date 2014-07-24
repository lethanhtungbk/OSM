<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TungController
 *
 * @author Tung
 */
class TungController extends BaseController{
    function getEntities($group)
    {
        $group = Groups::where('tag','=',$group)->get();
        if (count($group) != 1)
        {
            //invalid group
            return;
        }
    }
    
    
    function getEntity($group,$id)
    {
        //view detail object of a group
        
    }
    
}
