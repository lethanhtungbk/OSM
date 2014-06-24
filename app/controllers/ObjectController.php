<?php
class ObjectController extends BaseController {
    
    public function getObject($id) {
        $object = Object::where('group_id', '=', $id)->get();
        return View::make('object.list', array('object' => $object));
    }
    public function getEdit($id) { //get -> GET Method, Edit -> edit in URL
        $object = Object::where('group_id', '=', $id)->get();
        return View::make('object.list', array('object' => $object));
    }
    public function edit($id){
        
    }
}

