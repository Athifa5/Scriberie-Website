@extends('layouts.app')
  
  
@section('contents')
    <h1 class="mb-0">Note Details</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $product->title }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" placeholder="Descriptoin" readonly>{{ $product->description }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Type Of Notes</label>
            <input type="text" name="type_of_notes" class="form-control" placeholder="Ex: Personal/Diary/List/Others" value="{{ $product->type_of_notes }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Important</label>
            <input type="text" name="important" class="form-control" placeholder="YES/NO" value="{{ $product->important }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $product->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $product->updated_at }}" readonly>
        </div>
    </div>
@endsection