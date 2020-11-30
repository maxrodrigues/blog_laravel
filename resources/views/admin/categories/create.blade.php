@extends('adminlte::page')
@section('content')
<div class="mb-2 col-12">
    <a name="" id="" class="btn btn-primary" href="{{ route('admin.categories.index') }}" role="button">
        Voltar
    </a>
</div>
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Cadastrar nova categoria</h3>
        </div>
        <form action="{{ route('admin.categories.store') }}" method="post">
            @csrf
            @method('post')
            <div class="card-body">
                <div class="form-group">
                  <label for="name">Categoria</label>
                  <input type="text" name="name" id="name" class="form-control" placeholder="Nova Categoria" aria-describedby="helpId">
                </div>
            </div>
            <div class="card-footer text-muted">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
</div>
@endsection
