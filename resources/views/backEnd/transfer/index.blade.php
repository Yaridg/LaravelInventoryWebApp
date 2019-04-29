@extends('backLayout.app')
@section('title')
Transfer
@stop

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>

<div class="panel panel-default">
        <div class="panel-heading">Transfer</div>

        <div class="panel-body">

    {!! Form::open(['url' => 'transfer/store', 'class' => 'form-horizontal']) !!}

            <div class="form-group {{ $errors->has('slug') ? 'has-error' : ''}}">
                {!! Form::label('scan-label', 'Scan QR:', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">

                <div>@include('backEnd.qr.scanqrcode')</div> <!-- This Line Creates the Scan QR Button anywhere you put this piece of code -->
                QR Code Value:
                <div id="qr-code-value"></div> <!-- This is required cause the result will be added to this. Could be put any where -->
                <!-------------------------->

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
