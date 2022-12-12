@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

<h1 class="m-0 text-dark">
    Notícias - Listagem
</h1>

@stop

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endsection

@section('plugins.Summernote', true)

@section('content')


<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Lista de Notícias</h3>
    </div>
    <div class="card-body">

        {{-- Setup data for datatables --}}
        @php
        $heads = [
        'Título',
        'Resumo',
        'Últimas Atualizações',
        ['label' => 'Ações', 'no-export' => true, 'width' => 15]
        ];

        $data = [];
        foreach($lista as $noticia){
        $newDate = Carbon::parse($noticia->updated_at)->locale('br')->format('d/m/Y - H:i')."hrs";



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
    </div>
</div>




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

<script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.1/dist/iconify-icon.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    toastr.options.preventDuplicates = true;
</script>


@if(Session::has('success'))
<script>
    toastr.success("{{ Session::get('success') }}")
</script>
@endif



@if(Session::has('error'))
<script>
    toastr.error("{{ Session::get('error') }}")
</script>
@endif


@if($errors->any())
@foreach ($errors->all() as $error)
<script>
    toastr.error('{{$error}}')
</script>
@endforeach
@endif

@endsection