@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-8 col-md-12 ">
                <div class="row">
                    <div class="col-12 d-flex justify-content-end">
                        <a href="{{ route('admin.projects.create') }}"><i class="bi bi-plus-square fs-3"></i></a>
                    </div>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Description</th>
                            <th>Image Project</th>
                            <th>Tools</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <td>{{ $project->id }}</td>
                                <td>{{ $project->name }}</td>
                                <td>{{ $project->date }}</td>
                                <td>{{ $project->description }}</td>
                                <td>{{ $project->image_project }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('admin.projects.show', ['project' => $project->id]) }}">Show</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
