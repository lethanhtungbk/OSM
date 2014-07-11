@if (isset($field['desc']))
<div class="form-group">
    <label class="col-md-3 control-label">{{$field['desc']}}</label>
@endif
    <div class="col-md-9">
        <div class="radio-list">
            @foreach ($field['value'] as $key => $value)
            @if (isset($field['selected']) && $field['selected']==$key)
            <label class="radio-inline">
                <input type="radio" name="{{$field['name']}}" value="{{$key}}" checked>{{$value}}</label>
            @else
            <label class="radio-inline">
                <input type="radio" name="{{$field['name']}}" value="{{$key}}">{{$value}}</label>
            @endif           
            @endforeach
        </div>

    </div>
@if (isset($field['desc']))
</div>
@endif