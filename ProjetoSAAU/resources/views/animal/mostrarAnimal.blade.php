@extends('adminlte::page')

@section('title', 'Animais')

@section('content_header')
@stop

@section('content')


@php
$heads = [
'Nome',
'Sexo',

['label' => 'Ações', 'no-export' => true, 'width' => 15]
];

$data = [];
foreach($animal as $animals){

$btnEdit = '<a href="'. route('noticias.edit',['id'=>$noticia->id]).'" class=" mx-2"><i class="fas fa-user-edit text-info" aria-hidden="true"></i></a>';
$btnDelete='<a href="#" class="mx-2 deletebutton" data-toggle="modal" data-target="#deletarnoticia" data-noticiaid="'.$noticia->id.'" data-noticiatitle="'.$noticia->titulo.'"><i class="fas fa-trash text-danger" aria-hidden="true"></i></a>';
array_push($data, array($noticia->titulo, $noticia->resumo,$newDate,'<nobr>'.$btnEdit.$btnDelete.'</nobr>'
)
);
}
$config = ['data' => $data,
'order' => [[1, 'asc']],
'columns' => [null, ['orderable' => true], null],
];

@endphp
{{-- Minimal example / fill data using the component slot --}}
<x-adminlte-datatable id="table1" :heads="$heads">
    @foreach($config['data'] as $row)
    <tr>
        @foreach($row as $cell)
        <td>{!! $cell !!}</td>
        @endforeach
    </tr>
    @endforeach
</x-adminlte-datatable>
<!-- Modal -->
<form id="deleteForm" method="post" action="{{route('remover.noticias', 1)}}">
    @csrf
    @method('put')
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="modal fade" id="deletarnoticia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmação</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-center">Confirma a exclusão do registro?</p>
                    <p class="text-center" id=titulo_noticia></p>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger"> Deletar</button>
                </div>
            </div>
        </div>
    </div>
</form>


@stop



<div class="row ">
    <div class="col-10 ">
        <div class=" ">
            <div class="card-body">
                <div class="col-md-10">
                    <div class="card">
                        <!--Titulo da tabela-->
                        <div class="card-header card-header-icon" data-background-color="rose">
                            <i class="material-icons">
                                <h4>Animais cadastrados </h4>
                            </i>
                        </div>
                        <!--===============-->
                        <div class="card-content pl-2">
                            <div class="table-responsive">
                                <table class="table">
                                    <!--Cabecalho da tabel-->
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>sexo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!--===============-->

                                        <!--Corpo da tabela-->
                                        @foreach ($animal as $lista)
                                        <tr>
                                            <td>{{$lista->nome}}</td>
                                            <td>{{$lista->sexo}}</td>
                                            <td class="td-actions text-right">
                                                <a href="javascript:;" class="mx-2" data-bs-toggle="tooltip" data-bs-original-title="Edit product">
                                                    <i class="fas fa-eye text-secondary" aria-hidden="true"></i>
                                                </a>
                                                <a href="" class="mx-2" data-bs-toggle="tooltip" data-bs-original-title="Preview product">
                                                    <i class="fas fa-user-edit text-info" aria-hidden="true"></i>
                                                </a>
                                                <a href="" class="mx-2" data-bs-toggle="tooltip" data-bs-original-title="Delete product">
                                                    <i class="fas fa-trash text-danger" aria-hidden="true"></i>
                                                </a>

                                            </td>
                                        </tr>
                                        @endforeach
                                        <!--===============-->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('js')
<script>
    $('#table1').ready(function() {
        if ($.fn.dataTable.isDataTable('#table1')) {
            table = $('#table1').DataTable();
            //TODO trocar a linguagem 
        } else {
            $('#table1').DataTable({
                'language': {
                    'url': '//cdn.datatables.net/plug-ins/1.13.1/i18n/pt-BR.json'
                },

            });
        }
        table.destroy();

        table = $('#table1').DataTable({
            'language': {
                'url': '//cdn.datatables.net/plug-ins/1.13.1/i18n/pt-BR.json'
            },

        });
    });
</script>

<script>
    $('.deletebutton').on('click', function() {
        var noticiaid = this.dataset['noticiaid'];
        var noticia_titulo = this.dataset['noticiatitle'];
        console.log(noticia_titulo);
        $('#titulo_noticia').html("<b>" + noticia_titulo + "</b>");
        var gambi = $('#deleteForm').attr('action');
        var s = gambi.substr(gambi.indexOf('remover/') + 8);
        var final = gambi.replace(s, noticiaid)
        $('#deleteForm').attr('action', final);
    });
</script>
@endsection