<?php
class TestController extends BaseController {
    public function getTest()
    {
        $pageData = new PageData();
        $pageData->data = new stdClass();
        $pageData->data->testResult = URL::to('/test-result');
        
        $testMultipleValues = array (
            "1" => "Value 1",
            "3" => "Value 3",
            "4" => "Value 4",
            "6" => "Value 6",
            "7" => "Value 7",
            "9" => "Value 9",
            "10" => "Value 10",
            "12" => "Value 12",
            "13" => "Value 13",
            "15" => "Value 15",            
        );
        
        $testSelectedValue = array(1,3,4,8,9);
        $testSelectedSingleValue = 6;
        $testSelectedString =  "default string";
        $testSelectedDate = "07/17/2014";
        
        
        $pageData->data->pageRequest = array('date');
        //var_dump($testMultipleValues);
        //dummy value
        
        
        
        
        $pageData->data->fields = array(
            array('desc' => 'Text Field', 'ui' => 'textfield', 'name' => 'text_field','value' => $testSelectedString),
            array('desc' => 'Text Area Field', 'ui' => 'textarea', 'name' => 'text_area','value' => $testSelectedString),
            array('desc' => 'Date Field', 'ui' => 'date', 'name' => 'date','value' => $testSelectedDate),
            array('desc' => 'Image Field', 'ui' => 'image', 'name' => 'image','value' => ''),
            array('desc' => 'Checkbox Field', 'ui' => 'checkbox', 'name' => 'check_field[]','value' => $testMultipleValues,'selected' => $testSelectedValue),
            array('desc' => 'Radio Field', 'ui' => 'radio', 'name' => 'radio_field','value' => $testMultipleValues,'selected' => $testSelectedSingleValue),
            array('desc' => 'Single Dropdown Field', 'ui' => 'dropdown', 'name' => 'single_dropdown_field','value' => $testMultipleValues,'selected' => $testSelectedSingleValue),
            array('desc' => 'Single List Field', 'ui' => 'list', 'name' => 'single_list_field','value' => $testMultipleValues,'selected' => $testSelectedSingleValue),
            array('desc' => 'Multiple List Field', 'ui' => 'list', 'name' => 'multiple_list_field[] ','value' => $testMultipleValues,'selected' => $testSelectedValue),
            
        );
        
        
        return View::make('test.test',array('pageData' => $pageData));
    }
    
    public function postTestResult()
    {
        $pageData = new PageData();
        $pageData->data = new stdClass();
        $pageData->data->result = Input::all();
        return View::make('test.test-result',array('pageData' => $pageData));
    }
}

