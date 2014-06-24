<?php

class SettingController extends BaseController {
    //Field Type 
    public function getFieldTypes() {
        $fields = FieldTypes::select('id', 'name')->get();

        $pageData = new PageData();
        $pageData->data = new stdClass();
        $pageData->data->columns = DBColumns::getColumMap('field-types');
        $pageData->data->records = $fields;
        $pageData->data->add = URL::to('setting/field-types-add');
        $pageData->data->edit = URL::to('setting/field-types-edit');
        $pageData->data->remove = URL::to('setting/field-types-remove');
        return View::make('setting.fields', array('pageData' => $pageData));
    }

    public function getFieldTypesAdd() {
        $pageData = new PageData();
        $pageData->data = new stdClass();
        $pageData->data->fields = array(
            array('desc' => 'Field Type Name', 'ui' => 'textfield', 'name' => 'name'),
        );
        
        $pageData->data->save = URL::to('setting/field-types-save');
        $pageData->data->back = URL::to('setting/field-types');
        
        return View::make('setting.fields-add', array('pageData' => $pageData));
    }

    public function postFieldTypesSave() {
        $pageData = new PageData();
        $pageData->data = new stdClass();

        $input = Input::all();


        $validation = Validator::make($input, FieldTypes::$rules);
        if ($validation->passes()) {
            FieldTypes::create($input);

            return Redirect::to('setting/field-types');
        }

        return Redirect::to('setting/field-types-add')->withErrors($validation);
    }

    public function getFieldTypesEdit($id) {
        
        $fieldType = FieldTypes::find($id);
        //TODO: need validate $fieldTypes
        $pageData = new PageData();
        $pageData->data = new stdClass();
        $pageData->data->fields = array(
            array('desc' => 'Field Type Name', 'ui' => 'textfield', 'name' => 'name' ,'value' => $fieldType->name),
            array( 'ui' => 'hidden', 'name' => 'id','value' => $fieldType->id),
            
        );
        
        $pageData->data->save = URL::to('setting/field-types-update');
        $pageData->data->back = URL::to('setting/field-types');
        
        return View::make('setting.fields-add', array('pageData' => $pageData));
    }

    public function postFieldTypesUpdate() {
        $input = Input::all();
        $validation = Validator::make($input, FieldTypes::$rules);
        $fieldType = FieldTypes::find($input['id']);
        if ($fieldType != null && $validation->passes()) 
        {
            $fieldType->name = $input['name'];
            $fieldType->save();
            
            return Redirect::to('setting/field-types');
        }
        
        return Redirect::to('setting/field-types-edit/'.$input['id'])->withErrors($validation);
    }

    //Fields

    public function getFields() {
        $fields = Fields::select('id', 'name', 'code', 'field_type_id')->get();

        $fieldTypes = FieldTypes::lists('name', 'id');

        foreach ($fields as $field) {
            if (array_key_exists($field->field_type_id, $fieldTypes)) {
                $field->fileTypeName = $fieldTypes[$field->field_type_id];
            }
        }

        $pageData = new PageData();

        $pageData->data = new stdClass();

        $pageData->data->columns = DBColumns::getColumMap('fields');
        $pageData->data->records = $fields;
        $pageData->data->add = URL::to('setting/fields-add');
        $pageData->data->edit = URL::to('setting/fields-edit');
        $pageData->data->remove = URL::to('setting/fields-remove');


        //var_dump($fieldTypes);
        //var_dump($fields);
        return View::make('setting.fields', array('pageData' => $pageData));
    }

    public function getFieldsAdd() {
        $pageData = new PageData();

        $pageData->data = new stdClass();

        $pageData->data->fields = array(
            array('desc' => 'Field Name', 'ui' => 'textfield', 'name' => 'name'),
            array('desc' => 'Field Code', 'ui' => 'textfield', 'name' => 'code'),
            array('desc' => 'Field Type', 'ui' => 'dropdown_for_fields', 'name' => 'field_type_id', 'value' => FieldTypes::lists('name','id')),
        );
        
        $pageData->data->save = URL::to('setting/fields-save');
        $pageData->data->back = URL::to('setting/fields');


        return View::make('setting.fields-add', array('pageData' => $pageData));
    }

    public function postFieldsSave() {
        //var_dump(Input::all());
    }

    public function getFieldsEdit($id) {
        var_dump($id);
    }

    //Field Groups
    public function getFieldGroups() {
        $fields = Groups::select('id', 'name')->get();

        $pageData = new PageData();
        $pageData->data = new stdClass();
        $pageData->data->columns = DBColumns::getColumMap('groups');
        $pageData->data->records = $fields;
        $pageData->data->add = URL::to('setting/field-groups-add');
        $pageData->data->edit = URL::to('setting/field-groups-edit');
        $pageData->data->remove = URL::to('setting/field-groups-remove');
        return View::make('setting.fields', array('pageData' => $pageData));
    }
    
    public function getFieldGroupsAdd()
    {
        $pageData = new PageData();
        $pageData->data = new stdClass();
        $pageData->data->fields = array(
            array('desc' => 'Group Name', 'ui' => 'textfield', 'name' => 'name'),
            array('desc' => 'Select group fields', 'ui' => 'checkbox', 'name' => 'fields[]','value' => Fields::lists('name', 'id')),
        );
        
        $pageData->data->save = URL::to('setting/field-groups-save');
        $pageData->data->back = URL::to('setting/field-groups');


        return View::make('setting.fields-add', array('pageData' => $pageData));
    }
    
    public function getFieldGroupsEdit($id)
    {
        $pageData = new PageData();
        
        $group = Groups::find($id);
        
        
        $groupFields = GroupFields::where('group_id','=',$id)->get();
        
        $selected = array();
        
        foreach ($groupFields as $groupField)
        {
            array_push($selected, $groupField->field_id);
        }
        
        $pageData->data = new stdClass();
        $pageData->data->fields = array(
            array('desc' => 'Group Name', 'ui' => 'textfield', 'name' => 'name', 'value' => $group->name),
            array('desc' => 'Select group fields', 'ui' => 'checkbox', 'name' => 'fields[]','value' => Fields::lists('name', 'id'),'selected' => $selected),
            array('ui' => 'hidden','name' => 'id','value' => $group->id),
        );
        
        $pageData->data->save = URL::to('setting/field-groups-update');
        $pageData->data->back = URL::to('setting/field-groups');


        return View::make('setting.fields-add', array('pageData' => $pageData));
    }
    
    public function postFieldGroupsUpdate()
    {
        $input = Input::all();
        
        $id = $input['id'];
        
        $group = Groups::find($id);
        
        if ($group != null)
        {
            $group->name = $input['name'];
            $group->update();
            //remove all first
            GroupFields::where('group_id','=',$group->id)->delete();
            //add new fields to group
            foreach ($input['fields'] as $fieldId)
            {
                $fieldGroup = new GroupFields();
                $fieldGroup->group_id = $group->id;
                $fieldGroup->field_id = $fieldId;
                $fieldGroup->save();
            }
            return Redirect::to('setting/field-groups-edit/'.$id);
        }
        
    }
}
