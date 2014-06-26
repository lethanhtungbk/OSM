@extends('core.default')

@section('content')
@include('ui.list-action',array('add' => $pageData->data->top_action))
@include('ui.list',array('data' => $pageData->data))
@stop