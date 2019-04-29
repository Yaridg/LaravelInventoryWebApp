@extends('backLayout.app')
@section('title')
Add Lumber to Stock
@stop

@section('content')
<div class="panel panel-default">
        <div class="panel-heading">Add Lumber to stock</div>

        <div class="panel-body">

    {!! Form::open(['url' => 'addLumber', 'class' => 'form-horizontal']) !!}

            <div class="form-group {{ $errors->has('lumberType') ? 'has-error' : ''}}">
                {!! Form::label('lumberType', 'Lumber Type', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('lumberType', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('lumberType', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('length') ? 'has-error' : ''}}">
                {!! Form::label('length', 'Length', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('length', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('length', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('width') ? 'has-error' : ''}}">
                {!! Form::label('width', 'Width', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('width', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('width', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('height') ? 'has-error' : ''}}">
                {!! Form::label('height', 'Height', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('height', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('height', '<p class="help-block">:message</p>') !!}
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
