@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        
        <h1 class="my-4 text-center">New project</h1>
        <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
    
            <div class="mb-3 has-validation">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control @error('description') is-invalid @enderror"" id="description" name="description">
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <select name="type_id" id="type">
                    <option value="4"></option>
                    <option value="1">front-end</option>
                    <option value="2">back-end</option>
                    <option value="3">full-stack</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="image_path" class="form-label">Image</label>
                <input type="file" class="form-control" id="image_path" name="image_path">
                {{-- @error('image_path')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror --}}
            </div>

            </div>
            
            <button type="submit" class="btn btn-success">Save</button>
    
        </form>

    </div>
</div>
@endsection
