@extends('core.default')

@section('content')
<div class="table-toolbar">
    @include('ui.list-action')
    <a class="btn default" data-toggle="modal" href="#basic">View Demo </a>
    <div class="btn-group pull-right">
        <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
        </button>
        <ul class="dropdown-menu pull-right">
            <li>
                <a href="#">
                    Print </a>
            </li>
            <li>
                <a href="#">
                    Save as PDF </a>
            </li>
            <li>
                <a href="#">
                    Export to Excel </a>
            </li>
        </ul>
    </div>
</div>
@include('ui.list',array('table' => $pageData->data))

<div class="modal fade" id="basic" tabindex="-1" role="basic" aria-hidden="true">
    <div class="portlet box blue col-md-4">
        <div class="portlet-title">
            <div class="caption">Add new field type</div>        
        </div>
        <div class="portlet-body form">
            <!-- BEGIN FORM-->
            {{ Form::open(array('action' => 'SettingController@postFieldTypesSave','class' => 'form-horizontal')) }}

            <div class="form-body">
                <div class="form-group">
                    <label class="col-md-3 control-label">Field type</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Enter field type" name='name'>
                    </div>
                </div>
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
                    <a type="button" class="btn default" href="{{URL::to('setting/field-types')}}">Cancel</a>
                </div>
            </div>
            {{Form::close()}}
            <!-- END FORM-->


        </div>
    </div>
    <!-- /.modal-dialog -->
</div>
@stop


@section('custom-script')

@stop