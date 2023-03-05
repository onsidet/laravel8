@extends('layout.app')
@section('content_title','Category Add')
@section('title','Category')
@section('category') {{'active'}} @stop

@section('content')
<form>
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" id="name" name="name" class="form-control" placeholder="Name">
    </div>
    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select id="status" name="status" class="form-select">
            <option>Active</option>
            <option>Disable</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
    <button {{ url('/category') }} type="button" class="btn btn-secondary">Cancel</button>
</form>
@endsection
