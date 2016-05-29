@extends('vendor.laravel-authentication-acl.admin.layouts.base-2cols')


@section('title')
Admin area: edit payroll
@stop

@section('content')

@if( isset($data['payroll']) )
<?php $payroll = $data['payroll'] ?>
@endif
<div class="row">
    <div class="col-md-12">
        {{-- model general errors from the form --}}
        @if($errors->has('model') )
        <div class="alert alert-danger">{{$errors->first('model')}}</div>
        @endif

        {{-- successful message --}}
        <?php $message = Session::get('message'); ?>
        @if( isset($message) )
        <div class="alert alert-success">{{$message}}</div>
        @endif
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title bariol-thin">{!! isset($payroll->payroll_id) ? '<i class="fa fa-pencil"></i> Edit' : '<i class="fa fa-lock"></i> Create' !!} payroll</h3>
            </div>
            <div class="panel-body">
                {!! Form::model($payroll, [ 'url' => [URL::route('hrm.edit_payroll'), $payroll->payroll_id], 'method' => 'post'] )  !!}
                <!-- description text field -->
                <div class="form-group">
                    {!! Form::label('title','Title: *') !!}
                    {!! Form::text('title',  $payroll->payroll_title, ['class' => 'form-control', 'placeholder' => 'permission description', 'id' => 'slugme']) !!}
                </div>
                <span class="text-danger">{!! $errors->first('description') !!}</span>
                <!-- permission text field -->
                <div class="form-group">
                    {!! Form::label('description','Description: *') !!}
                    {!! Form::text('description', $payroll->payroll_description , ['class' => 'form-control', 'placeholder' => 'permission description', 'id' => 'slug']) !!}
                </div>
                <span class="text-danger">{!! $errors->first('permission') !!}</span>
                {!! Form::hidden('id', $payroll->payroll_id) !!}
                <a href="{!! URL::route('hrm.delete_payroll',['id' => $payroll->payroll_id, '_token' => csrf_token()]) !!}" class="btn btn-danger pull-right margin-left-5 delete">Delete</a>
                {!! Form::submit('Save', array("class"=>"btn btn-info pull-right ")) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@stop

@section('footer_scripts')
{!! HTML::script('packages/jacopo/laravel-authentication-acl/js/vendor/slugit.js') !!}
<script>
    $(".delete").click(function(){
        return confirm("Are you sure to delete this item?");
    });
    $(function(){
        $('#slugme').slugIt();
    });
</script>
@stop