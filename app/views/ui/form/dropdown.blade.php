@if (isset($field['desc']))
<div class="form-group">
    <label class="col-md-4 control-label">{{$field['desc']}}</label>
@endif
    <div class="col-md-5">
        <select class="form-control" name='{{$field['name']}}'>
            @foreach ($field['value'] as $key => $value)
                @if (isset($field['selected']) && $field['selected']==$key)
                    <option value='{{$key}}' selected="true">{{$value}}</option>
                @else
                    <option value='{{$key}}'>{{$value}}</option>
                @endif
            @endforeach
        </select>
    </div>
@if (isset($field['desc']))
</div>
@endif