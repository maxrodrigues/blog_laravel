@extends('adminlte::page')
@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Novo post</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 form-group">
                  <label for="">Título</label>
                  <input type="text" name="title" id="title" class="form-control" placeholder="Titulo do Post" aria-describedby="helpId">
                </div>
            </div>
            <div class="row">
                <div class="col-12 form-group">
                  <label for=""></label>
                  <textarea class="textarea" placeholder="Texto do post"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
            </div>
        </div>
        <div class="card-footer text-muted">
            Footer
        </div>
    </div>
</div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('vendor/summernote/summernote-bs4.min.css') }}">
@endsection

@section('js')
    <script src="{{ asset('vendor/summernote/summernote-bs4.min.js') }}"></script>
    <script>
        $(function(){
            $('.textarea').summernote()
        })
    </script>
@endsection
