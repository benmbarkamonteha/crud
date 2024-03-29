@extends('categorie.layout.app')
@section('content')
  <div class="container px-5 py-5">
<form method="POST" action="{{ route('categorie.create') }}">
  @csrf
  @method("post")
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter category name">
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea class="form-control" id="description" name="description" placeholder="Enter category description"></textarea>
  </div>
  <button type="submit" class="btn btn-primary"><i class="bi bi-plus-circle-fill"></i> Add Category</button>
</form>
</div>
@endsection