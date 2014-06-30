<?php

class EntityController extends \BaseController {

	public function getEntity($id) {
            $object = Object::where('id', '=', $id)->first();
            if (! isset($object)) {
                
            }
            $entities = DB::table('sa__objects as obj')
                ->join('sa__object_property_values as opv', 'obj.id', '=', 'opv.object_id')
                ->join('sa__fields as fld', 'opv.field_id', '=', 'fld.id')
                ->select('obj.id', 'fld.name as field_name', 'fld.field_type_id', 'opv.value')
                ->where('obj.id', '=', $id)
                ->orderBy('fld.field_type_id', 'desc')
                ->get();
            $fieldValue =  AvailableFieldValue::select('field_id', 'value')->get();
            $pageData = new PageData();
            $pageData->data = new stdClass();
            $pageData->data->entities = $entities;
            $pageData->data->caption = $object->name;
            return View::make('entity.object-entities', array('pageData' => $pageData));
        }
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return View::make('index');
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
