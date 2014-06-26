<div class="form-group">
    <label class="col-md-3 control-label">{{$field['desc']}}</label>
    <div class="col-md-4">
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
</div>