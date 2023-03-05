@extends('layout.app')
@section('content_title','Category')
@section('title','Category')
@section('category') {{'active'}} @stop
@section('button-add') <a href="{{ route('category.create') }}" class="btn btn-primary">Add</a> @stop

@section('content')
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Status</th>
        </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->status}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
