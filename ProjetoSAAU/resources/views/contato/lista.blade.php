@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

<h1 class="m-0 text-dark">
    Contato/Denúncia - Listagem
</h1>

@stop

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endsection

@section('plugins.Summernote', true)

@section('content')


<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Lista de Contatos/Denúncias</h3>
    </div>
    <div class="card-body">

        {{-- Setup data for datatables --}}
        @php
        $heads = [
        'Nome',
        'Titulo',
        'Titulo',
        'Email',
        'Mensagem',
        ['label' => 'Ações', 'no-export' => true, 'width' => 15]
        ];

        $data = [];
        foreach($lista as $contato){
        $newDate = Carbon::parse($contato->updated_at)->locale('br')->format('d/M/Y - H:i')."hrs";



      
        array_push($data, array($contato->nome, $contato->email, $contato->titulo,'<nobr></nobr>'
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
<form id="deleteForm" method="post" action="{{route('remover.contato', 1)}}">
    @csrf
    @method('put')
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="modal fade" id="deletarcontato" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <p class="text-center" id=titulo_adocao></p>

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
        var contatoid = this.dataset['contatoid'];
        var contato_nome = this.dataset['contatotitle'];
        console.log(contato_nome);
        $('#titulo_contato').html("<b>" + contato_titulo + "</b>");
        var gambi = $('#deleteForm').attr('action');
        var s = gambi.substr(gambi.indexOf('remover/') + 8);
        var final = gambi.replace(s, contatoid)
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