<!-- BEGIN FILTER BAR-->
<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">Search bar</div>
        <div class="actions">
            <a onclick="$('#searchForm').submit()" class="btn btn-default btn-sm"><i class="fa fa-pencil"></i> Search </a>
        </div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        {{ Form::open(array('url' => Request::url(),'class' => 'form-horizontal' , 'method' => 'post', 'id' => 'searchForm')) }}
        <div class="form-body">
            @if ($pageData->data != null && $pageData->data->filters != null)
            <?php $col = 0; ?>
            @foreach ($pageData->data->filters as $field)
            @if ($col == 0)
            <div class='row'>
                @endif
                <div class="col-md-4">
                    @include('ui.form.'.$field['ui'],array('field' => $field))
                </div>
                @if ($col == 2)
            </div>
            <?php $col = 0 ?>
            @else
            <?php $col++; ?>                
            @endif                            
            @endforeach
            @if (count($pageData->data->filters)%3 != 0)
        </div>
        @endif            
        @endif            
    </div>     
    {{Form::close()}}
    <!-- END FORM-->
</div>
</div>
<!-- END FILTER BAR-->