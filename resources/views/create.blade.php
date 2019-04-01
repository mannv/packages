@extends('layouts.adminlte')
@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Quick Example</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        {!! BTForm::open(['url' => route('bt.store'), 'id' => 'form-demo']) !!}

            <div class="box-body">
                {!! BTForm::text('name', __('Your name'), isset($mandatory['name'])) !!}
                {!! BTForm::email('email', __('Your email'), isset($mandatory['email'])) !!}
                {!! BTForm::tel('phone_number', __('Your phone'), isset($mandatory['phone_number'])) !!}
                {!! BTForm::url('url', __('Your Site'), isset($mandatory['url'])) !!}
                {!! BTForm::number('point', __('Point'), isset($mandatory['point'])) !!}
                {!! BTForm::textarea('description', __('Description'), isset($mandatory['description'])) !!}
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                {!! BTForm::submit(__('Submit')) !!}
            </div>
        {!! BTForm::close() !!}
    </div>
    <style type="text/css">
        span.mandatory {
            font-weight: bold;
            color: #dd4b39;
        }
    </style>
@stop

