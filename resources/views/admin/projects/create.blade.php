@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('admin.projects.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label" for="name">Nome</label>
                                <input class="form-control" type="text" name="name" id="name"
                                    value="{{ old('name') }}">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label" for="type_id">Data</label>
                                <input class="form-control" type="date" name="date" id="date"
                                    value="{{ old('date') }}">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label" for="description">Descrizione</label>
                                <textarea name="description" id="description" cols="30" rows="1" class="form-control" type="description"> 
                                {{ old('description') }}</textarea>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label" for="image_project">Immagine del Progetto</label>
                                <input class="form-control" type="image_project" name="image_project" id="image_project"
                                    value="{{ old('image_project') }}">
                            </div>
                        </div>

                        <div class="col-12 d-flex justify-content-center">
                            <button type="submit" class="btn btn-md btn-primary">Salva</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
