<?php

class SettingController extends BaseController {

    private $baseURL = 'setting';
    private $fieldTypesTag = 'field-types';
    private $fieldsTag = 'fields';
    private $fieldGroupsTag = 'field-groups';
    private $groupRulesTag = 'group-rules';

    //Prototype function
    protected function callListFunc($tag) {
        $pageData = new PageData($this->baseURL, $tag);
        $pageData->setListViewMode(true);
        return $pageData->getView();
    }

    protected function callDetailFun($tag, $id = null) {
        $pageData = new PageData($this->baseURL, $tag);
        $pageData->setListViewMode(false, $id);
        return $pageData->getView();
    }

    //List function 
    public function getFieldTypes() {
        return $this->callListFunc($this->fieldTypesTag);
    }

    public function getFields() {
        return $this->callListFunc($this->fieldsTag);
    }

    public function getFieldGroups() {
        return $this->callListFunc($this->fieldGroupsTag);
    }

    public function getGroupRules() {
        return $this->callListFunc($this->groupRulesTag);
    }

    //Detail function     
    public function getFieldTypesAdd() {
        return $this->callDetailFun($this->fieldTypesTag);
    }

    public function getFieldTypesEdit($id) {
        return $this->callDetailFun($this->fieldTypesTag, $id);
    }

    public function getFieldsAdd() {
        return $this->callDetailFun($this->fieldsTag);
    }

    public function getFieldsAddEdit($id) {
        return $this->callDetailFun($this->fieldsTag, $id);
    }

    public function getFieldGroupsAdd() {
        return $this->callDetailFun($this->fieldGroupsTag);
    }

    public function getFieldGroupsEdit() {
        return $this->callDetailFun($this->fieldGroupsTag);
    }

    public function getGroupRulesAdd() {
        return $this->callDetailFun($this->groupRulesTag);
    }

    //public function getGroupRulesEdit()         {     $this->callDetailFun($this->$groupRulesTag);                  }




    public function postFieldTypesSave() {
        $input = Input::all();
        $validation = Validator::make($input, FieldTypes::$rules);
        if ($validation->passes()) {
            FieldTypes::create($input);
            return Redirect::to('setting/field-types')->with(array('message' => 'Create Successful'));
        }
        return Redirect::to('setting/field-types-add')->withErrors($validation);
    }

    public function postFieldTypesUpdate() {
        $input = Input::all();
        $validation = Validator::make($input, FieldTypes::$rules);
        $fieldType = FieldTypes::find($input['id']);
        if ($fieldType != null && $validation->passes()) {
            $fieldType->name = $input['name'];
            $fieldType->save();

            return Redirect::to('setting/field-types');
        }

        return Redirect::to('setting/field-types-edit/' . $input['id'])->withErrors($validation);
    }


    public function postFieldsSave() {
        
    }

    public function postFieldsUpdate() {
        
    }


    public function postFieldGroupsSave() {
        $input = Input::all();

        $group = new Groups();
        $group->name = $input['name'];
        $group->save();

        $groupId = $group->id;


        foreach ($input['fields'] as $fieldId) {
            $groupField = new GroupFields();
            $groupField->group_id = $groupId;
            $groupField->field_id = $fieldId;
            $groupField->save();
        }

        return $this->getFieldGroups();
    }

    public function postFieldGroupsUpdate() {
        $input = Input::all();

        $id = $input['id'];

        $group = Groups::find($id);

        if ($group != null) {
            $group->name = $input['name'];
            $group->update();
            //remove all first
            GroupFields::where('group_id', '=', $group->id)->delete();
            //add new fields to group
            foreach ($input['fields'] as $fieldId) {
                $fieldGroup = new GroupFields();
                $fieldGroup->group_id = $group->id;
                $fieldGroup->field_id = $fieldId;
                $fieldGroup->save();
            }
            return Redirect::to('setting/field-groups-edit/' . $id);
        }
    }

    private function getFieldName($idStr, $fields) {
        $nameStr = '';
        $idArr = explode(",", $idStr);
        $nameArr = array();
        foreach ($idArr as $id) {
            if (array_key_exists($id, $fields)) {
                array_push($nameArr, $fields[$id]);
            }
        }
        $nameStr = implode(',', $nameArr);
        return $nameStr;
    }

    public function getGroupRulesEdit($id) {
        $pageData = new PageData($this->baseURL,$this->groupRulesTag);
        $pageData->setListViewMode(false);
        
        $groupRule = GroupRules::where('group_id', '=', $id)->get();

        if (count($groupRule) == 0)
            return;

        $groupRule = $groupRule[0];

        $groups = Groups::lists('name', 'id');

        //get group fields name
        $groupFields = DB::table(DBColumns::getTable('fields'))
                ->join(DBColumns::getTable('group_fields'), DBColumns::getTable('fields') . '.id', '=', DBColumns::getTable('group_fields') . '.field_id')
                ->select(DBColumns::getTable('fields') . '.name', DBColumns::getTable('fields') . '.id')
                ->get();

        //serialize fields

        $groupAllFieldArr = array();
        foreach ($groupFields as $groupField) {
            $groupAllFieldArr[$groupField->id] = $groupField->name;
        }
        $groupAllFieldStr = '"' . implode('","', $groupAllFieldArr) . '"';
        $fieldOrderInList = $this->getFieldName($groupRule->field_order_in_list, $groupAllFieldArr);
        $fieldOrderInDetail = $this->getFieldName($groupRule->field_order_in_detail, $groupAllFieldArr);
        $fieldOrderInFilter = $this->getFieldName($groupRule->field_order_in_filter, $groupAllFieldArr);



        if ($groupRule != null) {
            $pageData->data->fields = array(
                array('desc' => 'Group Rule', 'ui' => 'textfield', 'name' => 'name', 'value' => $groupRule->name),
                array('desc' => 'Group ', 'ui' => 'dropdown', 'name' => 'group_id', 'value' => $groups, 'selected' => $groupRule->group_id),
                array('desc' => 'Fields order in list', 'ui' => 'token', 'name' => 'field_order_in_list', 'value' => $fieldOrderInList, 'id' => 'token1'),
                array('desc' => 'Fields order in detail', 'ui' => 'token', 'name' => 'field_order_in_detail', 'value' => $fieldOrderInDetail, 'id' => 'token2'),
                array('desc' => 'Fields order in filter', 'ui' => 'token', 'name' => 'field_order_in_filter', 'value' => $fieldOrderInFilter, 'id' => 'token3'),
                array('ui' => 'hidden', 'name' => 'id', 'value' => $groupRule->id),
            );
        }


        $pageData->data->extra = '$("#token1").select2({tags: [' . $groupAllFieldStr . ']});'
                . '$("#token2").select2({tags: [' . $groupAllFieldStr . ']});'
                . '$("#token3").select2({tags: [' . $groupAllFieldStr . ']});';


        return $pageData->getView();
    }

    public function postGroupRuleUpdate() {
        $input = Input::all();

        $groupId = $input["group_id"];

        $groupRule = GroupRules::where('group_id', '=', $groupId)->get();

        if (count($groupRule) != 1) {
            //valide here;

            return;
        }
        $groupRule = $groupRule[0];
        //get group fields name
        $groupFields = DB::table(DBColumns::getTable('fields'))
                ->join(DBColumns::getTable('group_fields'), DBColumns::getTable('fields') . '.id', '=', DBColumns::getTable('group_fields') . '.field_id')
                ->select(DBColumns::getTable('fields') . '.name', DBColumns::getTable('fields') . '.id')
                ->get();

        $groupAllFieldArr = array();
        foreach ($groupFields as $groupField) {
            $groupAllFieldArr[$groupField->name] = $groupField->id;
        }

        $groupRule->field_order_in_list = $this->getFieldName($input['field_order_in_list'], $groupAllFieldArr);
        $groupRule->field_order_in_detail = $this->getFieldName($input['field_order_in_detail'], $groupAllFieldArr);
        $groupRule->field_order_in_filter = $this->getFieldName($input['field_order_in_filter'], $groupAllFieldArr);
        $groupRule->name = $input['name'];
        $groupRule->save();

        //need have message here..
        return $this->getGroupRulesEdit($groupId);
    }

}
