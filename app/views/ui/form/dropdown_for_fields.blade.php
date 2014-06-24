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
<div class="form-group">
    <label class="col-md-3 control-label"></label>
    <div class="col-md-3">
        <input type="text" class="form-control" placeholder="Add value">
    </div>
    <div class="col-md-1">
        <a id="sample_editable_1_new" class="btn green"><i class="fa fa-plus"></i></a>
        <a id="sample_editable_1_new" class="btn green"><i class="fa fa-minus"></i></a>
    </div>
</div>
