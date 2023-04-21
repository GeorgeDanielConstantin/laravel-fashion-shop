@extends('layouts.app')

@section('title', 'Modifica')

@section('cdn')
{{-- Bootstrap Icons --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
@endsection

@section('content')
<form action="{{ route('shoes.update', $shoe) }}" method="POST" class="row gy-3">

@csrf
@method('PUT')

<div class="col-6">
  <label for="marca" class="form-label">Marca</label>
  <input type="text" class="form-control @error('marca') is-invalid @enderror" id="marca" name="marca" value="{{ old('marca') ?? $shoe->marca }}">
  @error('marca')
  <div class="invalid-feedback">
    {{ $message }}
  </div>
  @enderror
  <div>

    <label for="modello" class="form-label">Modello</label>
    <input type="text" class="form-control @error('modello') is-invalid @enderror" id="modello" name="modello" value="{{ old('modello') ?? $shoe->modello }}">
    @error('modello')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  </div>
  @enderror
  <div>

    <label for="image" class="form-label">Immagine</label>
    <input type="text" class="form-control @error('image') is-invalid @enderror" id="image" name="image" value="{{ old('image') ?? $shoe->image }}">
    @error('image')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  </div>
  @enderror
  <div>

    <label for="colore" class="form-label">Colore</label>
    <input type="text" class="form-control @error('colore') is-invalid @enderror" id="colore" name="colore"  value="{{ old('colore') ?? $shoe->colore }}">
    @error('colore')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  </div>
  @enderror
  <div>
    
    <label for="taglia" class="form-label">Taglia</label>
    <input type="text" class="form-control @error('taglia') is-invalid @enderror" id="taglia" name="taglia"  value="{{ old('taglia') ?? $shoe->taglia }}">
    @error('taglia')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  </div>
  @enderror
  <div>

    <label for="prezzo" class="form-label">Prezzo</label>
    <input type="text" class="form-control @error('prezzo') is-invalid @enderror" id="prezzo" name="prezzo"  value="{{ old('prezzo') ?? $shoe->prezzo }}">
    @error('prezzo')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  </div>
  @enderror
</div>

<div class="col-6">
  @if($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif
</div>

<div class="col-12 d-flex">
  <button type="submit" class="btn btn-outline-primary col-6">Save</button>
</div>

</form>
@endsection