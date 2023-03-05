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
            <th scope="col" width="150px"></th>
        </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>
                    @if($category->status == 1)
                        {{'Active'}}
                    @else
                        {{'Disable'}}
                    @endif
                </td>
                <td>
                    <form action="{{route('category.delete',$category->id)}}" method="POST">
                        <a href="{{route('category.edit',$category->id)}}"  class="btn btn-warning btn-sm">Edit</a>
                        {{csrf_field()}}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
