@extends('layouts.adminlte')
@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Quick Example</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        {!! BTForm::open(['url' => route('bt.store')]) !!}

            <div class="box-body">
                {!! BTForm::text('name', __('Your name'), isset($mandatory['name'])) !!}
                {!! BTForm::email('email', __('Your email'), isset($mandatory['email'])) !!}
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

