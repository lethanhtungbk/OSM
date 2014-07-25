<!-- BEGIN FILTER BAR-->

    
    <div class="portlet-body form" >        
        {{ Form::open(array('url' => '','class' => 'form-horizontal' , 'method' => 'post')) }}
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
        <div class="form-actions fluid">
            <div class="col-md-offset-3 col-md-9">
                <button type="submit" class="btn blue">Search</button>                
            </div>
        </div>
        {{Form::close()}}        
    </div>

<!-- END FILTER BAR-->