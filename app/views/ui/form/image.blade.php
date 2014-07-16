@if (isset($field['desc']))
<div class="form-group">
    <label class="col-md-3 control-label">{{$field['desc']}}</label>
@endif    
    <div class="col-md-4">
        @if (array_key_exists('value',$field))
        <input type="file" name='{{$field['name']}}'>             
        @else
        <input type="file" name='{{$field['name']}}'>     
        @endif
    </div>
@if (isset($field['desc']))
</div>
@endif