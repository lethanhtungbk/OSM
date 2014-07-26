@if (isset($field['desc']))
<div class="form-group">
    <label class="col-md-4 control-label">{{$field['desc']}}</label>
@endif
    <div class="col-md-5">
        <div class="radio-list">
            @foreach ($field['value'] as $key => $value)
            <div>
            @if (isset($field['selected']) && $field['selected']==$key)
            <label class="radio-inline">
                <input type="radio" name="{{$field['name']}}" value="{{$key}}" checked>{{$value}}</label>
            @else
            <label class="radio-inline">
                <input type="radio" name="{{$field['name']}}" value="{{$key}}">{{$value}}</label>
            @endif
            </div>
            @endforeach
        </div>

    </div>
@if (isset($field['desc']))
</div>
@endif