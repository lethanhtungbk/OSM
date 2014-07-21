@if (isset($field['desc']))
<div class="form-group">
    <label class="col-md-3 control-label">{{$field['desc']}}</label>
@endif    
    <div class="col-md-4">
        @if (array_key_exists('value',$field))
        <input type="hidden" class="form-control select2" name='{{$field['name']}}' value="{{$field['value']}}" id="{{$field['id']}}">
        @else
        <input type="hidden" class="form-control select2" name='{{$field['name']}}' id="{{$field['id']}}>
        @endif
    </div>
@if (isset($field['desc']))
</div>
@endif

