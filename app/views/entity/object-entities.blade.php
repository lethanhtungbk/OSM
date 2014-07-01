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
                <td>{{$row->field_name}}</td>
                @if(isset($row->field_value))
                    <td>{{implode (',', $row->field_value)}}</td>
                @else
                    <td>&nbsp;</td>
                @endif
            </tr>
            @endforeach
        </table>
        @endif
    </div>
</div>
@stop