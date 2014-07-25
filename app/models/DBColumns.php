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
        "field-groups" => array(
            array("desc" => "Group","name" => "name"),            
        ),
        "group-rules" => array(
            array("desc" => "Group rules","name" => "name"),            
            array("desc" => "Group","name" => "group_name"),            
        ),
        
        
        "object-groups"=>array(
            array("desc" => "Object","name" => "name"),            
            array("desc" => "Properties Group","name" => "groupName"),            
        ),
        
        "entities" => array (
            array("desc" => "Object","name" => "name"),                        
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
    
    public static function getTable($name)
    {
        return "sa__".$name;
    }
}
