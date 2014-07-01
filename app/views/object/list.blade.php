@extends('core.default')
@section('content')
    @include('ui.list-action',array('add' => $pageData->data->top_action))
    @include('object.list2',array('data' => $pageData->data))
@stop