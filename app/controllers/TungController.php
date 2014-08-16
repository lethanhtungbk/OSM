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
class TungController extends BaseController {

    private $baseURL = 'setting';
    private $field_prefix = 'fields_';
    
    private function getValueFromArray($array,$key)
    {
        if (array_key_exists($key, $array))
        {
            return $array[$key];
        }
        else
        {
            return null;
        }
    }
    
    function getEntities($tag) {
        $inputs = Input::all();
        
        $group = Groups::where('tag', '=', $tag)->get();
        if (count($group) != 1) {
            //invalid group
            return;
        }

        $group = $group[0];


        $groupRule = GroupRules::where('group_id', '=', $group->id)->get();

        if (count($groupRule) != 1) {
            //invalid group rule
            return;
        }

        //filter search bar
        $groupRule = $groupRule[0];
        if ($groupRule->field_order_in_filter != '') {
            $fields = DB::table(DBColumns::getTable('fields'))
                    ->join(DBColumns::getTable('field_types'), DBColumns::getTable('fields') . '.field_type_id', '=', DBColumns::getTable('field_types') . '.id')
                    ->whereIn(DBColumns::getTable('fields') . '.id', explode(',', $groupRule->field_order_in_filter))
                    ->select(DBColumns::getTable('fields') . '.id', DBColumns::getTable('fields') . '.name', DBColumns::getTable('field_types') . '.type_value')
                    ->get();


            $uifields = array(
                UIModel::createTextEdit('Search', 'full_search',$this->getValueFromArray($inputs, 'full_search')),
            );

            foreach ($fields as $field) {
                switch ($field->type_value) 
                {
                    case FieldTypeValue::TYPE_CHECKBOX:
                    case FieldTypeValue::TYPE_DROPDOWN_MULTIPLE:
                    case FieldTypeValue::TYPE_DROPDOWN_SINGLE:
                    case FieldTypeValue::TYPE_LISTBOX_MULTIPLE:
                    case FieldTypeValue::TYPE_LISTBOX_SINGLE:
                    case FieldTypeValue::TYPE_RADIOBOX:                        
                        $value = DB::table(DBColumns::getTable('field_values'))->where('field_id', '=', $field->id)->lists('value', 'id');
                        $value = array(null => $field->name) + $value;        
                        array_push($uifields, UIModel::createMultipleByType($field->type_value, 
                                $field->name, 'fields_' . $field->id, 
                                $value,
                                $this->getValueFromArray($inputs, $this->field_prefix . $field->id)));
                        break;
                    case FieldTypeValue::TYPE_TEXT:
                        break;

                    case FieldTypeValue::TYPE_IMAGE:
                        break;
                }
            }

            //var_dump($fields);
        }
        //$entities = Object::where('group_id', '=', $group->id)->select('name')->get();
        $whereClauses = '';
        //$whereClauses = 'group_id=? ';
        $prfx_len = strlen($this->field_prefix);
        $param = array();
        //$param[] = $group->id;
        foreach ($inputs as $fName=>$value) {
            if (strlen($value)>0) {
                if (strpos($fName, $this->field_prefix) !== false && 0==strpos($fName, $this->field_prefix) ) {                    
                    $fieldName = substr($fName, $prfx_len);                    
                    if ( strlen($whereClauses)>1 ) {
                        $whereClauses = $whereClauses.' and ';
                    }
                    $whereClauses = $whereClauses.'(field_id=? and value=?)';
                    $param[]=$fieldName;
                    $param[]=$value;
                }
            }
        }  
        $entities ='';
        if (strlen($whereClauses)>0) {
            $entities = DB::table('sa__objects as obj')
                ->join('sa__object_property_values as opv', 'obj.id', '=', 'opv.object_id')
                ->whereRaw($whereClauses, $param)->select('obj.id', 'obj.group_id', 'obj.name')->get();
        }else {
            $entities = Object::where('group_id', '=', $group->id)->select('name')->get();
        }
        $pageData = new PageData($this->baseURL, $tag);
        $pageData->data->columns = DBColumns::getColumMap('entities');
        $pageData->data->records = $entities;
        $pageData->data->filters = $uifields;
        $pageData->isListView = true;
        return $pageData->getView();
    }

    function getEntity($group, $id) {
        //view detail object of a group
    }

}
