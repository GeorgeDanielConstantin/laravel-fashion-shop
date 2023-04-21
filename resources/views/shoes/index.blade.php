@extends('layouts.app')

@section('title', 'Index')
@section('cdn')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
@endsection

@section('content')

<form class="d-flex my-4" role="search">
        <input class="form-control me-2" type="search" name="term" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">Search</button>
    </form> 

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Marca</th>
      <th scope="col">Modello</th>
      <th scope="col">Colore</th>
      <th scope="col">Taglia</th>
      <th scope="col">Prezzo</th>
      <th scope="col">Actions</th>

    </tr>
  </thead>
  <tbody>
    @forelse($shoes as $shoe)
    <tr>
      <th scope="row">{{ $shoe->id}}</th>
      <td>{{ $shoe->marca}}</td>
      <td>{{ $shoe->modello}}</td>
      <td>{{ $shoe->colore}}</td>
      <td>{{ $shoe->taglia}}</td>
      <td>{{ $shoe->prezzo}}</td>
      <td> 
      <a href="{{route('shoes.show', $shoe)}}">
          <i class="bi bi-eye-fill"></i>
        </a>
        <a href="{{ route('shoes.edit', $shoe) }}">
          <i class="bi bi-pencil-fill text-primary"></i>
        </a>
        <button class="bi bi-trash3-fill text-danger btn-trash" data-bs-toggle="modal" data-bs-target="#delete-modal-{{ $shoe->id }}"></button>
      </td>

    </tr>
    @empty
    @endforelse
  </tbody>
</table>

{{ $shoes->links() }}

@endsection

@section('modals')
@foreach ($shoes as $shoe)
<!-- Modal -->
<div class="modal fade" id="delete-modal-{{ $shoe->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header modal-bg">
        <h1 class="modal-title fs-5 text-danger" id="exampleModalLabel">{{ $shoe->id }} sta per essere eliminato</h1>
        <a type="button" class="text-light" data-bs-dismiss="modal" aria-label="Close">
          <i class="bi bi-x-circle"></i>
        </a>
      </div>
      <div class="modal-body modal-bg">
        Vuoi eliminare definitivamente?
      </div>
      <div class="modal-footer modal-bg">

        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
          <i class="bi bi-file-arrow-down"></i>
          Annulla
        </button>

        <form action="{{ route('shoes.destroy', $shoe) }}" method="POST">
          @csrf
          @method('delete')

          <button class="btn btn-danger">
            <i class="bi bi-trash3-fill"></i>
            Delete
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
@endforeach