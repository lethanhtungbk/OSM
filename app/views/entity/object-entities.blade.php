@extends('core.default')

@section('content')
<div class="portlet box blue entities-container">
    <div class="portlet-title">
        <div class="caption" style="width: 100%">{{$pageData->caption}}
            <span class="pull-right"><a href="#" class="editable" onclick="entityEditable(this);" >Edit</a></span>
        </div>        
    </div>
    {{ Form::open(array('action' => 'EntityController@postEntitiesSave')) }}
    <input type="hidden" value ="{{$pageData->group_id}}" name="group_id"/>
    <div class="portlet-body form bg-info">
        @if (isset($pageData->entities))
        <table class="table" >
            @foreach ($pageData->entities as $row)
            <tr >
                <td style="width: 50%">{{$row->field_name}}</td>
                <td style="width: 50%" class="td-editable" field_id="{{$row->field_id}}">
                    <span class="show-value-cell">
                    @if(isset($row->field_value))
                        {{implode (',', $row->field_value)}}
                    @else
                        &nbsp;
                    @endif
                    </span>
                    <span class="show-input-value hide">
                        @if (isset($row->fields))
                            @include('ui.form.'.$row->fields['ui'], array('field' => $row->fields))
                        @endif
                    </span>
                </td>
            </tr>
            @endforeach
        </table>
        @endif
    {{Form::close()}}
        <div class="button-container text-center hide">
            <a href="#" class="btn green" onclick="submitEntityForm(this);">Save <i class="fa"></i></a>
            <a href="#" class="btn green" onclick="cancelEntitiesEditting(this);">Cancel <i class="fa"></i></a>
        </div>
    </div>
</div>
@stop