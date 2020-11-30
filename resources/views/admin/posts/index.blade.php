@extends('adminlte::page')
@section('content')
<div class="mb-2 col-12">
    <a name="" id="new-post" class="btn btn-primary" href="{{ route('admin.posts.create') }}" role="button">Novo Post</a>
</div>
    
@endsection