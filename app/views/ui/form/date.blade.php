@if (isset($field['desc']))
<div class="form-group">
    <label class="col-md-4 control-label">{{$field['desc']}}</label>
@endif    
    <div class="col-md-5">
        @if (array_key_exists('value',$field))
        <input class="form-control form-control-inline input-medium date-picker" size="16" type="text" name='{{$field['name']}}' value="{{$field['value']}}"/>
        @else
        <input class="form-control form-control-inline input-medium date-picker" size="16" type="text" name='{{$field['name']}}'/>
        @endif
    </div>
@if (isset($field['desc']))
</div>
@endif