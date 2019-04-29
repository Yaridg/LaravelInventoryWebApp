@extends('backLayout.app')
@section('title')
Add Lumber to Stock
@stop

@section('content')
<div class="panel panel-default">
        <div class="panel-heading">Remove Lumber from Stock</div>

        <div class="panel-body">

    {!! Form::open(['url' => 'addLumber', 'class' => 'form-horizontal']) !!}
    <div class="form-group {{ $errors->has('slug') ? 'has-error' : ''}}">
                {!! Form::label('scan-label', 'Scan QR:', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">

                <div>@include('backEnd.qr.scanqrcode')</div> <!-- This Line Creates the Scan QR Button anywhere you put this piece of code -->
                QR Code Value:
                {!! Form::text('qrCode',null,['class' => 'input-group-text','id' => 'qrCode', 'style' => 'display: inline-block;', 'disabled']) !!}
                <!-------------------------->

                </div>
            </div>
            <div class="form-group {{ $errors->has('lumberType') ? 'has-error' : ''}}">
                {!! Form::label('lumberType', 'Lumber Type', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('lumberType', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('lumberType', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('amount') ? 'has-error' : ''}}">
                {!! Form::label('branch', 'Select Your Branch', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                {!! Form::select('districts[]',$branches,null,['class' => 'form-control']) !!}

                </div>
            </div>
            <div class="form-group {{ $errors->has('amount') ? 'has-error' : ''}}">
                {!! Form::label('amount', 'Amount', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('amount', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('amount', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
    <div class="form-group">
        <div class="col-sm-offset-6 col-sm-3">
            {!! Form::submit('Submit', ['class' => 'btn btn-success form-control']) !!}
        </div>
    </div>
    </div>
    </div>
    {!! Form::close() !!}

@endsection
