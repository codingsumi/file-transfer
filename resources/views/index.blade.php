@extends('layout')
@section('main-section')
    <div class="text-end my-3"><a href="{{ route('create.new') }}" class="btn btn-sm btn-primary">Add New</a></div>
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">S.no</th>
                    <th scope="col">File</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($data as $row)
                    <tr class="">
                        <td scope="row">{{ $i++ }}</td>
                        <td>{{ $row->file }}</td>
                        <td>
                            <a href="{{ asset($row->file) }}" download class="btn btn-sm btn-success">Download</a>
                            <a href="{{ url('delete/') }}/{{ $row->id }}" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
