@extends('core.default')
@section('content')
    @include('ui.list-action',array('add' => $pageData->data->top_action))
    @include('ui.list2',array('data' => $pageData->data))
@stop