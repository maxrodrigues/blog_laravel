@extends('adminlte::page')
@section('content')
<div class="mb-2 col-12">
    <a name="" id="new-post" class="btn btn-primary" href="{{ route('admin.posts.create') }}" role="button">Novo Post</a>
</div>
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">DataTable with default features</h3>
        </div>
        <div class="card-body">
            <table id="category" class="table">
                <thead>
                    <tr>
                        <th style="width:7%">#</th>
                        <th>Tituloß</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <td scope="row">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                            <i class="fa fa-edit" aria-hidden="true"></i>
                        </td>
                        <td>{{ $post->title }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
