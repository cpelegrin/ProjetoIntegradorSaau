@extends('adminlte::page')


@section('title', 'AdminLTE')


@section('content_header')

<h1 class="m-0 text-dark">
    Calendário
</h1>
@stop

@section('css')
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet'>
<link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css' rel='stylesheet'>
@endsection


@section('content')

{{-- Setup data for datatables --}}
@php
$calendarios = [];
$heads = [
'ID',
'Nome',
'Telefone',

['label' => 'Telefone', 'width' => 40],
['label' => 'Ações', 'no-export' => true, 'width' => 15]
];

$data = [];
foreach($calendarios as $calendario){

$btnEdit = '<a href="'. route('editar_calendario',['id'=>$calendario->id]).'" class=" mx-2"><i class="fas fa-user-edit text-info" aria-hidden="true"></i></a>';
$btnDelete='<a href="#" class="mx-2 deletebutton" data-toggle="modal" data-target="#deletarcalendario" data-calendarioid="'.$calendario->id.'" data-calendarionome="'.$calendario->nome.'"><i class="fas fa-trash text-danger" aria-hidden="true"></i></a>';
array_push($data, array($calendario->id, $calendario->name, $calendario->telefone,'<nobr>'.$btnEdit.$btnDelete.'</nobr>'

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
<form id="deleteForm" method="post" action="{{route('deletar_calendario', 1)}}">
    @csrf
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="modal fade" id="deletarcalendario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <p class="text-center" id=nome_calendario></p>

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
            //TODO trocar a linguage 
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
        console.log(this);
        var calendarioid = this.dataset['calendarioid'];
        var calendarionome = this.dataset['calendarionome'];
        console.log("ID " + calendarioid + " nome " + calendarionome)
        $('#nome_calendario').html("<b>" + calendarionome + "</b>");
        var gambi = $('#deleteForm').attr('action');
        var s = gambi.substr(gambi.indexOf('deletar/') + 8);
        var final = gambi.replace(s, calendarioid)
        $('#deleteForm').attr('action', final);
    });
</script>

@stop