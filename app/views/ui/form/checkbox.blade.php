@if (isset($field['desc']))
<div class="form-group">
    <label class="col-md-4 control-label">{{$field['desc']}}</label>
@endif    
    <div class="col-md-5">
        @foreach ($field['value'] as $key => $value)
        <div>
        @if (array_key_exists('selected',$field) && in_array($key,$field['selected']))
        <input type="checkbox" name="{{$field['name']}}" value='{{$key}}' checked="true">{{$value}}</option>
        @else
        <input type="checkbox" name="{{$field['name']}}" value='{{$key}}' >{{$value}}</option>
        @endif
        </div>
        @endforeach
    </div>
@if (isset($field['desc']))
</div>
@endif

