@extends('backLayout.app')
@section('title')
Login
@stop

@section('style')

@stop
@section('content')

<!----- Custom Content ----->
<h2>{{$title}}</h2>

<div>@include('backEnd.qr.scanqrcode')</div> <!-- This Line Creates the Scan QR Button anywhere you put this piece of code -->

QR Code Value:
<div id="qr-code-value"></div> <!-- This is required cause the result will be added to this. Could be put any where -->
<!-------------------------->

@endsection

@section('scripts')


@endsection
