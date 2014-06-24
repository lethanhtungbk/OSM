@extends('core.default')

@section('content')

<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">Add new field type</div>        
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        {{ Form::open(array('action' => 'SettingController@postFieldTypesSave','class' => 'form-horizontal')) }}
        <div class="form-body">
            @if ($pageData->data != null)
            @foreach ($pageData->data as $field)
            @if ($field['type'] == 1)
            @include('ui.form.textfield',array('field' => $field))
            @elseif ($field['type'] == 2)
            @include('ui.form.textarea')
            @elseif ($field['type'] == 3)
            @include('ui.form.dropdown',array('field' => $field))
            @elseif ($field['type'] == 4)
            @include('ui.form.list')
            @elseif ($field['type'] == 5)
            @include('ui.form.checkbox')
            @elseif ($field['type'] == 6)
            @include('ui.form.radio')
            @elseif ($field['type'] == 7)
            @include('ui.form.date')
            @elseif ($field['type'] == 8)
            @include('ui.form.image')
            @endif
            @endforeach
            @endif            
        </div>
        @if ($errors->any())
        <div>
            <ul>
                {{ implode('', $errors->all('<li class="error">:message</li>')) }}
            </ul>
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

@section('custom-script')


@stop

@section('custom-style')
@parent
{{ HTML::style('assets/global/plugins/bootstrap-datepicker/css/datepicker3.css'); }}
{{ HTML::style('assets/global/plugins/bootstrap-datepicker/css/datepicker.css'); }}
@stop

@section('custom-plugin')
@parent
{{HTML::script('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js');}}
{{HTML::script('assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js');}}
{{HTML::script('assets/admin/pages/scripts/components-pickers.js')}}
@stop

@section('custon-init')
ComponentsPickers.init()
@stop
