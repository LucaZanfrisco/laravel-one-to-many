@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center border border-2 mt-3 rounded-4 p-4">
            <ul class="list-unstyled">
                <li><a href="{{ route('admin.project.index')}}" class="btn btn-sm btn-danger">Back</a></li>
                <li>
                    <h2 class="my-4">
                        {{ $project->nome }}
                    </h2>
                </li>
                <li class="mb-4 text-secondary">
                    <h3>{{ $project->type?->nome ?: 'Nessuna Tipologia' }}</h3>
                </li>
                <li>{{ $project->descrizione }}</li>
                <li class="my-3">Data di Creazione: {{ $project->data_di_creazione }}</li>
                @if ($project->completato == 1)
                    <li class="d-flex align-items-center gap-2">  
                        Completato: <div class="circle done"></div>
                    </li>
                @else
                    <li class="d-flex align-items-center gap-2">
                        Completato: <div class="circle work"></div>
                    </li>
                @endif
                @if ($project->riscosso == 1)
                    <li class="d-flex align-items-center gap-2">  
                         Riscosso: <div class="circle done"></div>
                    </li>
                @else
                    <li class="d-flex align-items-center gap-2">
                        Riscosso: <div class="circle work"></div>
                    </li>
                @endif
            </ul>
            <div><img class="img-fluid show-img" src="{{ asset('storage/' . $project->immagine) }}" alt=""></div>
        </div>
       
    @endsection
