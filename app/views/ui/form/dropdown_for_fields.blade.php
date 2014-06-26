<div class="form-group">
    <label class="col-md-3 control-label">{{$field['desc']}}</label>
    <div class="col-md-4">
        <select class="form-control" name='{{$field['name']}}' id='cboFieldTypes'>
            <option value='0'>Select field type</option>
            @foreach ($field['value'] as $key => $value)
            <option value='{{$key}}'>{{$value}}</option>
            @endforeach
        </select>
    </div>
</div>
<div id='extraValue'>
    @include('ui.form.extra-value')
</div>

