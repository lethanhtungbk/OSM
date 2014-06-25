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
}

