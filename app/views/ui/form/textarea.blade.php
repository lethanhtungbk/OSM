@if (isset($field['desc']))
<div class="form-group">
    <label class="col-md-3 control-label">{{$field['desc']}}</label>
@endif    
    <div class="col-md-4">
        @if (array_key_exists('value',$field))
        <textarea class="form-control" placeholder="{{array_key_exists('holder',$field)?$field['holder']:'' }}" name='{{$field['name']}}'>{{$field['value']}}</textarea>
        @else
        <textarea class="form-control" placeholder="{{array_key_exists('holder',$field)?$field['holder']:'' }}" name='{{$field['name']}}'/>
        @endif
    </div>
@if (isset($field['desc']))
</div>
@endif