<div class="table-toolbar">
    <div class="btn-group">
        @if (isset($pageData->data->top_action)) 
            @foreach ($pageData->data->top_action as $an_action)
                <a class="btn green margin-right-10" href="{{$an_action['url']}}">
                    {{$an_action['label']}} <i class="fa {{$an_action['class']}}"></i>
                </a>
            @endforeach
        @endif
    </div>
</div>