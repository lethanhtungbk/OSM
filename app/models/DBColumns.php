<?php


class DBColumns {
    public static $columnMap = array(
        "field-types" => array(
            array("desc" => "Field type","name" => "name"),            
        ),
        "fields" => array(
            array("desc" => "Field","name" => "name"),
            array("desc" => "Field code","name" => "code"),
            array("desc" => "Field type","name" => "fileTypeName"),                
        ),
        "groups" => array(
            array("desc" => "Group","name" => "name"),            
        ),
        "object-groups"=>array(
            array("desc" => "Object","name" => "name"),            
            array("desc" => "Properties Group","name" => "groupName"),            
        ),
    );
    
    
    public static function getColumMap($name)
    {
        if (array_key_exists($name, self::$columnMap))
        {
            return self::$columnMap[$name];
        }
        return null;
    }
}
