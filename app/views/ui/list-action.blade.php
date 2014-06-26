<div class="table-toolbar">
    <div class="btn-group">
        @if (isset($pageData->data->top_action)) 
            @foreach ($pageData->data->top_action as $an_action)
                <a id="sample_editable_1_new" class="btn green" href="{{$an_action['url']}}">
                    {{$an_action['label']}} <i class="fa {{$an_action['class']}"></i>
                </a>
            @endforeach
        @endif
    </div>
</div>