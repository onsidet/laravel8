@extends('layout.app')
@section('content_title','Category Add')
@section('title','Category')
@section('category') {{'active'}} @stop

@section('content')
    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
<form method="POST" action="{{route("category.store")}}">
    {{ csrf_field() }}
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" id="name" name="name" class="form-control" placeholder="Name">
    </div>
    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select id="status" name="status" class="form-select">
            <option value="1">Active</option>
            <option value="0">Disable</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
    <a href="{{ route('category') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection
