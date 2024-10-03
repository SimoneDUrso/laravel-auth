@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <!-- Titolo e pulsante aggiunta progetto -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1 class="fw-bold">Project List</h1>
                    <a href="{{ route('admin.projects.create') }}" class="btn btn-primary btn-lg">
                        <i class="bi bi-plus-square me-2"></i> Add New Project
                    </a>
                </div>

                <!-- Tabella progetti -->
                <div class="table-responsive">
                    <table class="table table-hover table-striped align-middle shadow-sm">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Date</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $project)
                                <tr class="border-bottom">
                                    <td>{{ $project->id }}</td>
                                    <td class="fw-bold">{{ $project->name }}</td>
                                    <td>{{ $project->date }}</td>
                                    <td>{{ Str::limit($project->description, 50) }}</td>
                                    <td>
                                        <img src="{{ $project->image_project }}" alt="{{ $project->name }}"
                                            class="img-thumbnail">
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.projects.show', ['project' => $project->id]) }}"
                                            class="btn btn-outline-primary btn-sm">
                                            <i class="bi bi-eye-fill fs-4"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
