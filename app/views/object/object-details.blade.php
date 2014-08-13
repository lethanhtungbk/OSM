@extends('core.default')

@section('content')
<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">{{$pageData->data->caption}}</div>        
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        {{ Form::open(array('url' => $pageData->data->save,'class' => 'form-horizontal' , 'method' => 'post')) }}
        <div class="form-body">
            @if ($pageData->data != null)
            @foreach ($pageData->data->fields as $field)
            @include('ui.form.'.$field['ui'],array('field' => $field))
            @endforeach
            @endif            
        </div>
        <input type="hidden" name="action" value="{{$pageData->data->action}}"/>
        @if ($errors->any())
        <div>
            <label class="col-md-3 control-label">{{ implode('', $errors->all('<li class="error">:message</li>')) }}</label>
        </div>
        @endif      
        <div class="form-actions fluid">
            <div class="col-md-offset-3 col-md-9">
                <button type="submit" class="btn blue">Add new</button>
                <button type="button" class="btn blue" onclick="submitObjectAndEditEntities(this)" link="{{$pageData->data->savenext}}">Add & Edit details</button>
                <button type="button" class="btn default" href="{{$pageData->data->back}}">Cancel</button>
            </div>
        </div>
        {{Form::close()}}
        <!-- END FORM-->
    </div>
</div>
@stop