@extends('layout')
@section('main-section')
    <div class="text-end my-3"><a href="{{ route('show.all') }}" class="btn btn-sm btn-primary">Show All</a></div>
    <form action="{{ route('store.file') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="file" class="form-label">File</label>
            <input type="file" name="file" id="" required class="form-control">
        </div>
        <div class="mb-3">
            <button class="btn btn-sm btn-primary">Submit</button>
        </div>
    </form>
@endsection
