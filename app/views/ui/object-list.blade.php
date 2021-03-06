@extends('core.default')

@section('content')
@if(Session::has('message'))
    <div class="alert-box success">
        <h2>{{ Session::get('message') }}</h2>
    </div>
@endif
@if (array_key_exists('top_action',$pageData->data))
@include('ui.list-action',array('add' => $pageData->data->top_action))
@endif

@if (array_key_exists('filters',$pageData->data))
@include('ui.list-filter',array('filters' => $pageData->data->filters))
@endif

@include('ui.list',array('data' => $pageData->data))
@stop