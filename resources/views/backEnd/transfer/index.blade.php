@extends('backLayout.app')
@section('title')
Transfer
@stop

@section('content')
<div class="panel panel-default">
        <div class="panel-heading">Transfer</div>

        <div class="panel-body">

    {!! Form::open(['url' => 'transfer/store', 'class' => 'form-horizontal']) !!}

            <div class="form-group {{ $errors->has('slug') ? 'has-error' : ''}}">
                {!! Form::label('scan-label', 'Scan QR:', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    <button class="btn btn-success">SCAN</button>
                </div>
            </div>

            <div class="form-group {{ $errors->has('slug') ? 'has-error' : ''}}">
                {!! Form::label('amount-label', 'Amount', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('amount','', ['class' => 'form-control', 'min' => '50', 'style' => 'width:100px;']) !!}
                </div>
            </div>
            
            <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                {!! Form::label('transferto', 'Transfer to:', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('transfer',['Belize Branch'],null,['class' => 'form-control']) !!}
                </div>
            </div> 
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Submit', ['class' => 'btn btn-success form-control']) !!}
        </div>
    </div>
    </div>
    </div>
    {!! Form::close() !!}
 
@endsection
