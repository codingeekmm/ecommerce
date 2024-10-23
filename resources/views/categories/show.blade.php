@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $category->name }}</h1>   
    
    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">Edit Category</a>
    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back to Categories</a>
</div>
@endsection
