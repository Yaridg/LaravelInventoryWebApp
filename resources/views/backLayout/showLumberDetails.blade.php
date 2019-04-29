@extends('backLayout.app')
@section('title')
Lumber Details
@stop

@section('content')
<div class="panel panel-default">
        <div class="panel-heading">Lumber Details</div>

        <div class="panel-body">
<table class="table table-bordered table-striped table-hover" id="tblLumberDetails">
    <thead>
        <tr>
            <th>ID</th>
            <th>Lumber Type</th>
            <th>Length </th>
            <th>Width</th>
            <th>Height</th>
            <th>Amount</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td>1</td>
                <td>Pine</td>
                <td>4</td>
                <td>2</td>
                <td>6</td>
                <td>50</td>
                <td>
                    <a href="" class="btn btn-primary btn-xs">Add Lumber</a>
                    <a href="" class="btn btn-success btn-xs">Remove Lumber</a>

                </td>
            </tr>
    </tbody>
</table>
@endSection