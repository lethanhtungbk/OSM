<?php
class ObjectController extends BaseController {
    
    public function getObject($id) {        
        $object = Object::where('group_id', '=', $id)->get();

        $pageData = new PageData();
        $pageData->data = new stdClass();
        $pageData->data->columns = DBColumns::getColumMap('field-types');
        $pageData->data->records = $object;
        $pageData->data->add = URL::to('object/add');
        $pageData->data->edit = URL::to('object/edit');
        $pageData->data->remove = URL::to('object/remote');
        return View::make('object.list', array('pageData' => $pageData));
    }
    public function getEdit($id) { //get -> GET Method, Edit -> edit in URL        
        $object = DB::table('sa__objects')
            ->join('sa__groups', 'sa__objects.group_id', '=', 'sa__groups.id')            
            ->select('sa__objects.id', 'sa__groups.name as group_name', 'sa__objects.name as object_name')
            ->where('sa__objects.id', '=', $id)
            ->first();
        
        $pageData = new PageData();
        $pageData->data = new stdClass();
        $pageData->data->fields = array(
            array('desc' => 'Id', 'ui' => 'textfield', 'name' => 'id', 'value'=>$object->id), //
            array('desc' => 'Group', 'ui' => 'textfield', 'name' => 'group_name', 'value' => $object->group_name), //
            array('desc' => 'Object', 'ui' => 'textfield', 'name' => 'object_name', 'value' => $object->object_name), //
        );        
        $pageData->data->save = URL::to('object/save');
        $pageData->data->back = URL::to('object/object/');
        $pageData->data->caption = 'Edit Object details';
        return View::make('object.object-details', array('pageData' => $pageData));
    }
}

