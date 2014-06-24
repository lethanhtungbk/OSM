@extends('core.default')
@section('content')
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Object Id</th>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
    @foreach($object as $key => $value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->name}}</td>
            <td class="table-column-action">
                    <div class="btn-group" style="width: 250px !important">
                        <a class="btn green" href="{{URL::to('/object/edit/'.$value->id)}}">
                            Edit <i class="fa fa-plus"></i>
                        </a>
                        <a class="btn green" href="{{URL::to('/object/remove/'.$value->id)}}">
                            Remove <i class="fa fa-minus"></i>
                        </a>
                    </div>
            </td>            
        </tr>
    @endforeach
    </tbody>    
</table>
@stop