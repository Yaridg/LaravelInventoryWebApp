
@extends('frontLayout.app')
@section('title')
Lumber Inventory Web Application
@stop

@section('style')

@stop
@section('content')
<div class="content">
<div class="title m-b-md">
    Lumber Inventory Web Application

</div>
@if (Sentinel::check() )
     Your name : {{Sentinel::getUser()->first_name}} <br>
     Last name : {{Sentinel::getUser()->last_name}} <br>
     E-mail : {{Sentinel::getUser()->email}} <br>
    @endif

</div>
@endsection

@section('scripts')


@endsection
