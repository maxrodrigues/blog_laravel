@extends('adminlte::page')

@section('content')
    <div class="mb-2 col-12">
        <a name="" id="" class="btn btn-primary" href="{{ route('admin.categories.create') }}" role="button">
            Adicionar
        </a>
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
                            <th>Nome</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <td scope="row">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                                <i class="fa fa-edit" aria-hidden="true"></i>
                            </td>
                            <td>{{ $category->name }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('plugins.Datatables', true)
@section('js')
    <script>
        $(document).ready(function (){
            $('#category').DataTable({
                language: {
                    paginate: {
                        first:      "Primeira",
                        previous:   "Anterior",
                        next:       "Próxima",
                        last:       "Última"
                    },
                    emptyTable: 'Nenhum registro encontrado',
                    search: 'Procurar',
                    lengthMenu: "Mostrar _MENU_ resultados",
                    info: 'Mostrando entre _START_ e _END_ de _TOTAL_ resultados ',
                    infoEmpty: ''
                }
            });
        })
    </script>
@endsection
