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
        return self::createMultiple('dropdown_for_fields', $desc, $name, $value, $selected);
    }

    public static function createDropDown($desc, $name, $value = null, $selected = null) {
        return self::createMultiple('dropdown', $desc, $name, $value, $selected);
    }

    public static function createList($desc, $name, $value = null, $selected = null) {
        return self::createMultiple('list', $desc, $name, $value, $selected);
    }

    public static function createCheckBox($desc, $name, $value = null, $selected = null) {
        return self::createMultiple('checkbox', $desc, $name, $value, $selected);
    }

    public static function createRadio($desc, $name, $value = null, $selected = null) {
        return self::createMultiple('radio', $desc, $name, $value, $selected);
    }

    private static function createMultiple($ui, $desc, $name, $value = null, $selected = null) {
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

    public static function createMultipleByType($type, $desc, $name, $value = null, $selected = null) {
        //return self::createRadio($desc, $name . '[]', $value, $selected);
        switch ($type) {
            case FieldTypeValue::TYPE_CHECKBOX:
                return self::createCheckBox($desc, $name . '[]', $value, $selected);
            case FieldTypeValue::TYPE_DROPDOWN_MULTIPLE:
                return self::createDropDown($desc, $name . '[]', $value, $selected);
            case FieldTypeValue::TYPE_LISTBOX_MULTIPLE:
                return self::createList($desc, $name . '[]', $value, $selected);
            case FieldTypeValue::TYPE_DROPDOWN_SINGLE:
                return self::createDropDown($desc, $name, $value, $selected);
            case FieldTypeValue::TYPE_RADIOBOX:
                return self::createRadio($desc, $name, $value, $selected);
            case FieldTypeValue::TYPE_LISTBOX_SINGLE:
                return self::createRadio($desc, $name, $value, $selected);
        }
        return null;
    }
    
    

}
