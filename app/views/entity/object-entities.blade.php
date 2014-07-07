@extends('core.default')

@section('content')
<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">{{$pageData->caption}}</div>        
    </div>
    <div class="portlet-body form">
        @if (isset($pageData->entities))
        <table class="table">
            @foreach ($pageData->entities as $row)
            <tr >
                <td style="width: 50%">{{$row->field_name}}</td>
                <td style="width: 50%">
                    <span class="show-value-cell">
                    @if(isset($row->field_value))
                        {{implode (',', $row->field_value)}}
                    @else
                        &nbsp;
                    @endif
                    </span>
                    <span class="hide">
                        @if (isset($row->fields))
                            @include('ui.form.'.$row->fields['ui'], array('field' => $row->fields))
                        @endif
                    </span>
                </td>
            </tr>
            @endforeach
        </table>
        @endif
    </div>
</div>
@stop