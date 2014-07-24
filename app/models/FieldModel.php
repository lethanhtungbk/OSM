<?php
class FieldModel {
    public function getFields($tag,$id=null)
    {
        switch ($tag)
        {
            case 'field-types':
                return $this->getFieldTypesCase($id);
            case 'fields':
                return $this->getFieldsCase($id);
            case 'field-groups':
                return $this->getFieldGroupsCase($id);
        }
    }    
    
    
    private function getFieldTypesCase($id = null)
    {
        
        $value = null;        
        if ($id != null)
        {
            $fieldType = FieldTypes::find($id);
            $value = $fieldType->name;          
            
            return array(
                UIModel::createTextEdit('Field Type Name', 'name',$value),
                UIModel::createHidden('id',$id),            
            );
        }
        
        return array(UIModel::createTextEdit('Field Type Name', 'name'));
        
        
    }
    
    private function getFieldsCase($id = null)
    {
        if ($id != null)
        {
            return array(
//                $this->createTextEdit('Field Name', 'name'),
//                $this->createTextEdit('Field Code', 'code'),
//                $this->createDropDownForFields('Field type', 'field_type_id',FieldTypes::lists('name','id')),
//                $this->createHidden('id',$id),            
            );
        }
        else
        {
            return array(
                UIModel::createTextEdit('Field Name', 'name'),
                UIModel::createTextEdit('Field Code', 'code'),
                UIModel::createDropDownForFields('Field type', 'field_type_id',FieldTypes::lists('name','id')),
            );
        }        
    }
    
    private function getFieldGroupsCase($id = null)
    {
        $value = Fields::lists('name', 'id');
        
        if ($id != null)
        {
            $group = Groups::find($id);
            $groupFields = GroupFields::where('group_id','=',$id)->get();
            $selected = array();
            foreach ($groupFields as $groupField)
            {
                array_push($selected, $groupField->field_id);
            }
            return array(
                UIModel::createTextEdit('Group Name', 'name'),
                UIModel::createCheckBox('Select group fields', 'fields[]',$value,$selected),
                UIModel::createHidden('id',$group->id),     
            );
        }
        else
        {
            return array(
                UIModel::createTextEdit('Group Name', 'name'),
                UIModel::createCheckBox('Select group fields', 'fields[]',$value ),
            );
        }      
    }
    
    
    
            
}
