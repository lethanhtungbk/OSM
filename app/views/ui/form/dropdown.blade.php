<div class="form-group">
    <label class="col-md-3 control-label">{{$field['desc']}}</label>
    <div class="col-md-4">
        <select class="form-control" name='{{$field['name']}}'>
            @foreach ($field['value'] as $key => $value)
            <option value='{{$key}}'>{{$value}}</option>
            @endforeach
        </select>
    </div>
</div>