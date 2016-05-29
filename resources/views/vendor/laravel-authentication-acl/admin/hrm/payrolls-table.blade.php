<div class="row">
    <div class="col-md-12 margin-bottom-12">
        <a href="{!! URL::route('permission.edit') !!}" class="btn btn-info pull-right"><i class="fa fa-plus"></i> Add New</a>
    </div>
</div>
@if( isset($data['payrolls']) )
    @if( ! $data['payrolls']->isEmpty() )
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Permission description</th>
                <th>Permission name</th>
                <th>Operations</th>
            </tr>
            </thead>
            <tbody>
                @foreach($data['payrolls'] as $payroll)
                <tr>
                    <td style="width:45%">{!! $payroll->payroll_title !!}</td>
                    <td style="width:45%">{!! $payroll->payroll_description !!}</td>
                    <td style="witdh:10%">
                        <a href="{!! URL::route('hrm.edit_payroll', ['id' => $payroll->payroll_id]) !!}"><i class="fa fa-pencil-square-o fa-2x"></i></a>
                        <a href="{!! URL::route('hrm.delete_payroll',['id' =>$payroll->payroll_id, '_token' => csrf_token()]) !!}" class="margin-left-5"><i class="fa fa-trash-o delete fa-2x"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
    <span class="text-warning"><h5>No permissions found.</h5></span>
    @endif
@endif
