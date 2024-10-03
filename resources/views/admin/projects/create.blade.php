@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-primary text-white">
                        <h3 class="mb-0 text-center">Create New Project</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.projects.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <!-- Nome Progetto -->
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label" for="name"><i class="bi bi-pencil-fill me-2"></i>
                                            Nome</label>
                                        <input class="form-control form-control-lg" type="text" name="name"
                                            id="name" value="{{ old('name') }}"
                                            placeholder="Inserisci il nome del progetto">
                                    </div>
                                </div>

                                <!-- Data Progetto -->
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label" for="date"><i
                                                class="bi bi-calendar-date-fill me-2"></i> Data</label>
                                        <input class="form-control form-control-lg" type="date" name="date"
                                            id="date" value="{{ old('date') }}">
                                    </div>
                                </div>

                                <!-- Descrizione Progetto -->
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label" for="description"><i
                                                class="bi bi-chat-right-text-fill me-2"></i> Descrizione</label>
                                        <textarea name="description" id="description" cols="30" rows="3" class="form-control form-control-lg"
                                            placeholder="Descrivi il progetto">{{ old('description') }}</textarea>
                                    </div>
                                </div>

                                <!-- Immagine del Progetto -->
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label" for="image_project"><i class="bi bi-image-fill me-2"></i>
                                            Immagine del Progetto</label>
                                        <input class="form-control form-control-lg" type="text" name="image_project"
                                            id="image_project" value="{{ old('image_project') }}"
                                            placeholder="Inserisci il link dell'immagine">
                                    </div>
                                </div>

                                <!-- Pulsante di Invio -->
                                <div class="col-12 d-flex justify-content-center mt-3">
                                    <button type="submit" class="btn btn-lg btn-success px-5">
                                        <i class="bi bi-save me-2"></i> Salva
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
