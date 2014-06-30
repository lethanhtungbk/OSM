@extends('core.default')

@section('content')
<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">{{$pageData->data->caption}}</div>        
    </div>
    <div class="portlet-body form">
        <table class="table">
            @foreach ($pageData->data->entities as $row)
            <tr >
                <td>{{$row->field_name}}</td>
                <td>{{$row->value}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@stop