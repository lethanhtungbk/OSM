@extends('core.default')

@section('content')
@if(Session::has('message'))
    <div class="alert-box success">
        <h2>{{ Session::get('message') }}</h2>
    </div>
@endif
<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">Add new field</div>        
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        {{ Form::open(array('url' => $pageData->data->save,'class' => 'form-horizontal' , 'method' => 'post')) }}
        <div class="form-body">
            @if ($pageData->data != null && $pageData->data->fields != null)
            @foreach ($pageData->data->fields as $field)
            @include('ui.form.'.$field['ui'],array('field' => $field))
            @endforeach
            @endif            
        </div>
        @if ($errors->any())
        <div>
            <label class="col-md-3 control-label">{{ implode('', $errors->all('<li class="error">:message</li>')) }}</label>
        </div>
        @endif      
        <div class="form-actions fluid">
            <div class="col-md-offset-3 col-md-9">
                <button type="submit" class="btn blue">Submit</button>
                <a type="button" class="btn default" href="{{$pageData->data->back}}">Cancel</a>
            </div>
        </div>
        {{Form::close()}}
        <!-- END FORM-->
    </div>
</div>
@stop

@section('custom-style')
{{ HTML::style('assets/global/plugins/select2/select2.css'); }}
{{ HTML::style('assets/global/css/plugins.css'); }}
@stop

@section('custom-plugin')
@parent
{{HTML::script('assets/global/plugins/select2/select2.min.js')}}
@stop

@section('custom-script')
@parent
$('#cboFieldTypes').change(function() 
{
    var val = parseInt($('#cboFieldTypes').val());
    switch (val)
    {
        case 3:
        case 4:
        case 5:
        case 6:
            $('#extraValue').show(); 
            break;
        default:
            $('#extraValue').hide(); 
            break;
    }
});
    


function onAddValue(element)
{
    var test = "@include('ui.form.extra-value')";
    $(element).closest(".form-group").after(test);
    //$('#extraValue').append(test);
}

function onRemoveValue(element)
{
    if ($('#extraValue').find('div.form-group').length > 1) 
        $(element).closest(".form-group").remove()
}

@if (property_exists($pageData->data,'extra'))
{{$pageData->data->extra}}
@endif
@stop

