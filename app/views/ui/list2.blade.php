<div class="table-responsive">
    @if (isset($data))
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr >                
                @if ($data != null && $data->columns != null)
                @foreach ($data->columns as $col)
                <th>{{$col['desc']}}</th>
                @endforeach
                @endif                
                <th></th>
            </tr>
        </thead>        
        <tbody>
            @if ($data != null && $data->columns != null && $data->records != null)
            @foreach ($data->records as $row)
            <tr>
                @foreach ($data->columns as $col)
                    @if (!empty($row->$col['name']))                   
                    <td>{{ $row->$col['name'] }}</td>
                    @endif
                @endforeach
                <td class="table-column-action">
                    <div class="btn-group" style="width: 250px">
                        <a id="sample_editable_1_new" class="btn green" href="{{$data->edit.'/'.$row->id}}">
                            Edit <i class="fa fa-plus"></i>
                        </a>
                        <a id="sample_editable_1_new" class="btn green" href="{{$data->delete.'/'.$row->id}}">
                            Remove <i class="fa fa-minus"></i>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>    
    @endif
</div>