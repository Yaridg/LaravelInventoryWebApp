@extends('backLayout.app')
@section('title')
Login
@stop

@section('style')

@stop
@section('content')



<h2>Generating QR Code Test</h2>

<br>

{!! QrCode::size(250)->generate($categoryID); !!}






@endsection

@section('scripts')


@endsection
