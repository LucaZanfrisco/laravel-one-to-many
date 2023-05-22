@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('admin.project.store') }}" method="POST" enctype="multipart/form-data" class="mt-3">
            @csrf
            <div class="mb-3">
                <label for="nome" class="form-label fs-5 fw-bold">Nome</label>
                <input type="text" class="form-control @error('nome') is-invalid @enderror" id="nome" name="nome"
                    value="{{ old('nome') }}">
            </div>
            @error('nome')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="my-3">
                <label for="immagine" class="form-label fs-5 fw-bold">Selezione un file immagine da inserire</label>
                <input class="form-control @error('immagine') is-invalid @enderror" type="file" id="immagine"
                    name="immagine">
            </div>
            @error('immagine')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="my-3">
                <label for="descrizione" class="form-label fs-5 fw-bold">Descrizione</label>
                <textarea name="descrizione" id="descrizione" cols="30" rows="6"
                    class="form-control @error('description') is-invalid @enderror">{{ old('descrizione') }}</textarea>

            </div>
            @error('descrizione')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="my-3">
                <label for="data_di_creazione" class="form-label fs-5 fw-bold">Data di creazione</label>
                <input type="date" class="form-control @error('data_di_creazione') is-invalid @enderror"
                    id="data_di_creazione" name="data_di_creazione" value="{{ old('data_di_creazione') }}">
            </div>
            @error('data_di_creazione')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="my-3">
                <label for="completato" class="form-label fs-5 fw-bold">Completato</label>
                <select name="completato" id="completato" class="form-select @error('completato') is-invalid @enderror">
                    <option value="1" {{ old('completato') == 1 ? 'selected' : '' }}>Completato</option>
                    <option value="0" {{ old('completato') == 0 ? 'selected' : '' }}>Non completato</option>
                </select>
            </div>
            @error('completato')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="my-3">
                <label for="riscosso" class="form-label fs-5 fw-bold">Riscosso</label>
                <select name="riscosso" id="riscosso" class="form-select @error('riscosso') is-invalid @enderror">
                    <option value="1" {{ old('riscosso') == 1 ? 'selected' : '' }}>Riscosso</option>
                    <option value="0" {{ old('riscosso') == 0 ? 'selected' : '' }}>Non riscosso</option>
                </select>
            </div>
            @error('riscosso')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <a href="{{ route('admin.project.index') }}" class="btn btn-dark">Cancella</a>
            <button type="submit" class="btn btn-success">Salva</button>
        </form>
    </div>
@endsection
