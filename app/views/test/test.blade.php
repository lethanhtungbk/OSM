@extends('core.default')

@section('content')
<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">Fields testing</div>        
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        {{ Form::open(array('url' => $pageData->data->testResult,'class' => 'form-horizontal' , 'method' => 'post')) }}
        <div class="form-body">
            @if ($pageData->data != null)
            @foreach ($pageData->data->fields as $field)
            @include('ui.form.'.$field['ui'],array('field' => $field))
            @endforeach
            @endif            
            <div class="form-group">
                  <label class="control-label col-md-3">Tags Support List</label>
                  <div class="col-md-4">
                    <input type="hidden" id="select2_sample5" class="form-control select2" value="red, blue">
                  </div>
            </div>
        </div>
        <div class="form-actions fluid">
            <div class="col-md-offset-3 col-md-9">
                <button type="submit" class="btn blue">Submit</button>
                <a type="button" class="btn default" href="">Cancel</a>
            </div>
        </div>
        {{Form::close()}}
        <!-- END FORM-->


    </div>
</div>
@stop


@section('custom-style')
@parent
{{ HTML::style('assets/global/plugins/bootstrap-datepicker/css/datepicker3.css'); }}
{{ HTML::style('assets/global/plugins/bootstrap-datepicker/css/datepicker.css'); }}



{{ HTML::style('assets/global/plugins/select2/select2.css'); }}
{{ HTML::style('assets/global/css/plugins.css'); }}

@stop

@section('custom-plugin')
@parent
{{HTML::script('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js');}}
{{HTML::script('assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js');}}
{{HTML::script('assets/admin/pages/scripts/components-pickers.js')}}


{{HTML::script('assets/global/plugins/select2/select2.min.js')}}




@stop

@section('custon-init')
ComponentsPickers.init();
@stop

@section('custom-script')


 $("#select2_sample5").select2({
            tags: ["red", "green", "blue", "yellow", "pink"]
        });
@stop
