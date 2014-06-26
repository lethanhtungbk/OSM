<?php
class ObjectController extends BaseController {
    
    public function getObject($id) {        
        $object = Object::where('group_id', '=', $id)->get();
        $pageData = new PageData();
        $pageData->data = new stdClass();
        $pageData->data->columns = DBColumns::getColumMap('field-types');
        $pageData->data->records = $object;
        $pageData->data->edit = URL::to('object/edit');
        $pageData->data->delete = URL::to('object/remove/'.$id);
        $pageData->data->top_action = array(
            array('url' => URL::to('object/add'), 'label'=>'New Object', 'class'=>'fa-plus'),
        );
        return View::make('object.list', array('pageData' => $pageData));
    }
    public function getEdit($id) { //get -> GET Method, Edit -> edit in URL
        $object = DB::table('sa__objects')        
            ->join('sa__groups', 'sa__objects.group_id', '=', 'sa__groups.id')            
            ->select('sa__objects.id', 'sa__groups.id as group_id', 'sa__objects.name as object_name')
            ->where('sa__objects.id', '=', $id)
            ->first();        
        return $this->createObjectForm($object);
    }
    
    public function getAdd() {
        return $this->createObjectForm(null);
    }
    public function postSave() {
        $input = Input::all();
        $id = $input['id'];
        $action = $input['action'];
        
        if ($action=='Edit') {
            $object = Object::find($id);
            $object->name = $input['object_name'];
            $object->save();
        }else if ($action=='AddNew') {
            Object::insert(
                    array('id' => $input['id'], 'group_id'=>$input['group_id'], 'name' => $input['object_name'])
            );
        }
        return Redirect::to('object/object/'.$input['group_id']);
    }
    public function getRemove($groupId,$id) {
        $object=Object::find($id);
        if (isset($object)) {
            $object->delete();
        }
        return Redirect::to('object/object/'.$groupId);
    }
            
    private function createObjectForm($object) {
        $groups = Groups::lists('name','id');
        $pageData = new PageData();
        $pageData->data = new stdClass();
        if (isset($object)) {
            $pageData->data->fields = array(
                array('desc' => 'Id', 'ui' => 'textfield', 'name' => 'id', 'value'=>$object->id), //
                array('desc' => 'Group', 'ui' => 'dropdown', 'name' => 'group_id', 'value' => $groups, 'selected' =>$object->group_id), //
                array('desc' => 'Object', 'ui' => 'textfield', 'name' => 'object_name', 'value' => $object->object_name), //
            );
            $pageData->data->action = 'Edit';
            $pageData->data->caption = 'Edit Object details';
        } else {
            $pageData->data->fields = array(
                array('desc' => 'Id', 'ui' => 'textfield', 'name' => 'id'), //
                array('desc' => 'Group', 'ui' => 'dropdown', 'name' => 'group_id', 'value' => $groups), //
                array('desc' => 'Object', 'ui' => 'textfield', 'name' => 'object_name'), //
            );
            $pageData->data->action = 'AddNew';
            $pageData->data->caption = 'Add new Object';
        }
        $pageData->data->save = URL::to('object/save');
        $pageData->data->back = URL::to('object/object/');
        return View::make('object.object-details', array('pageData' => $pageData));
    }
}

