<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TableModel
 *
 * @author Tung
 */
class TableModel {
    private $tag;
    public function getTable($tag)
    {
        $this->tag = $tag;        
        switch ($tag)
        {
            case 'field-types':
                return $this->getFieldTypes();
            case 'fields':
                return $this->getFields();
            case 'field-groups':
                return $this->getFieldGroups();
            case 'group-rules':
                return $this->getGroupRules();
                
        }
    }
    
    private function getFieldTypes()
    {
        $table = new stdClass();
        $table->columns = DBColumns::getColumMap($this->tag);
        $table->records = FieldTypes::select('id', 'name')->get();
        return $table;
    }
    
    private function getFields()
    {
        $fields = Fields::select('id', 'name', 'code', 'field_type_id')->get();
        $fieldTypes = FieldTypes::lists('name', 'id');
        foreach ($fields as $field) {
            if (array_key_exists($field->field_type_id, $fieldTypes)) {
                $field->fileTypeName = $fieldTypes[$field->field_type_id];
            }
        }
        
        $table = new stdClass();
        $table->columns = DBColumns::getColumMap($this->tag);
        $table->records = $fields;
        return $table;
    }
    
    private function getFieldGroups()
    {
        $table = new stdClass();
        $table->columns = DBColumns::getColumMap($this->tag);
        $table->records = Groups::select('id', 'name')->get(); 
        return $table;
    }
    
    private function getGroupRules()
    {
        $groupRules = GroupRules::select('id', 'name','group_id')->get();        
        $groups = Groups::lists('name', 'id');        
        foreach ($groupRules as $groupRule)
        {
            if (array_key_exists($groupRule->group_id, $groups))
            {
                $groupRule->group_name = $groups[$groupRule->group_id];                
            }
            else
            {
                $groupRule->group_name = 'undefined';
            }
        }
        
        $table = new stdClass();
        $table->columns = DBColumns::getColumMap($this->tag);
        $table->records = $groupRules;
        return $table;
       
    }
}
