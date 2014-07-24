<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MenuModel
 *
 * @author Tung
 */
class MenuModel {
    public static function getObjectMenu()
    {
        
        $groups = DB::table(DBColumns::getTable('groups'))                
                ->select(DBColumns::getTable('groups') . '.tag',DBColumns::getTable('groups') . '.name')
                ->get();
        
        return $groups;
        
    }
}
