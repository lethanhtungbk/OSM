<?php

class UIModel {

    public static function createTextEdit($desc, $name, $value = null) {
        if ($value != null) {
            return array('desc' => $desc, 'ui' => 'textfield', 'name' => $name, 'value' => $value);
        } else {
            return array('desc' => $desc, 'ui' => 'textfield', 'name' => $name);
        }
    }

    public static function createHidden($name, $value) {
        return array('ui' => 'hidden', 'name' => $name, 'value' => $value);
    }

    public static function createDropDownForFields($desc, $name, $value = null, $selected = null) {        
        return self::createMultiple('dropdown_for_fields', $desc, $name,$value);
    }
    
     public static function createDropDown($desc, $name, $value = null, $selected = null) {        
        return self::createMultiple('dropdown', $desc, $name,$value);
    }
    
    public static function createList($desc, $name, $value = null, $selected = null) {        
        return self::createMultiple('list', $desc, $name,$value);
    }

    public static function createCheckBox($desc, $name, $value = null, $selected = null) {
        return self::createMultiple('checkbox', $desc, $name,$value);
    }
    
    public static function createRadio($desc, $name, $value = null, $selected = null) {
        return self::createMultiple('radio', $desc, $name,$value);
    }
    
    private static function createMultiple($ui,$desc,$name,$value=null,$selected = null)
    {
        if ($value != null) {
            if ($selected != null) {
                return array('desc' => $desc, 'ui' => $ui, 'name' => $name, 'value' => $value, 'selected' => $selected);
            } else {
                return array('desc' => $desc, 'ui' => $ui, 'name' => $name, 'value' => $value);
            }
        } else {
            return array('desc' => $desc, 'ui' => $ui, 'name' => $name);
        }
    }

}
