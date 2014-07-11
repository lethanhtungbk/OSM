<?php

class EntityController extends \BaseController {

	public function getEntity($id) {
            $object = Object::where('id', '=', $id)->first();
            if (! isset($object)) {
                
            }
            $entities_data = DB::table('sa__objects as obj')
                ->join('sa__object_property_values as opv', 'obj.id', '=', 'opv.object_id')
                ->join('sa__fields as fld', 'opv.field_id', '=', 'fld.id')
                ->select('obj.id', 'fld.name as field_name', 'fld.field_type_id as field_type_id', 'opv.value as field_value', 'opv.field_id as field_id')
                ->where('obj.id', '=', $id)
                ->orderBy('fld.field_type_id', 'desc')
                ->get();
            $group_id = $object->group_id;
            
            $groupFields = DB::table('sa__group_fields as sgf')
                ->join('sa__fields as sf', 'sgf.field_id', '=', 'sf.id')
                ->join('sa__field_types as sft', 'sf.id', '=', 'sft.id')
                ->where('sgf.group_id','=', $group_id )
                ->select('sgf.group_id as group_id', 'sf.id as field_id', 'sf.name as field_name', 'sf.code as field_code', 'sft.uic as field_type_code', 'sft.is_multi_option as is_multi_option')
                ->get();
            
            $entities = array();
            $availValues = AvailableFieldValue::all();
            
            foreach ($groupFields as $field) {
                $entities[$field->field_type_code] = new stdClass();
                $entities[$field->field_type_code]->field_type = $field->field_type_code;
                $entities[$field->field_type_code]->field_name = $field->field_name;
                
                $field_value = array();
                foreach ($entities_data as $data) {
                    if ($data->field_id == $field->field_id) {
                        $field_value[] = trim($data->field_value);
                    }
                }
                if ($field->is_multi_option!==0) { //load available option
                    $option = array();
                    foreach($availValues as $availValue) {
                        if ($availValue->field_id==$field->field_id) {
                            $option[$availValue->id] = $availValue->value;
                        }
                    }
                    $entities[$field->field_type_code]->fields = 
                            array('ui' => $field->field_type_code, 'name' => $field->field_type_code, 'value' => $option, 'selected' =>$field_value);
                } else {
                    $entities[$field->field_type_code]->fields = array('ui' => $field->field_type_code, 'name' => 'id', 'value'=>$object->id);
                }
                $entities[$field->field_type_code]->field_value = $field_value;
            }
            
            $pageData = new PageData();
            $pageData->entities = $entities;
            $pageData->caption = $object->name;
            return View::make('entity.object-entities', array('pageData' => $pageData));
            //return View::make('index', array('pageData' => $pageData));
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
