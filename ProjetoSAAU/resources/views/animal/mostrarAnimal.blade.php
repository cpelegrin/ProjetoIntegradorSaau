@extends('adminlte::page')

@section('title', 'Animais')

@section('content_header')
@stop



@section('content')

<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Cadastro de Animais</h3>
    </div>
    <div class="card-body">

        {{-- Setup data for datatables --}}
        @php
        $heads = [
        'Nome',
        'Sexo',
        'Resumo de Prontuário',



        ['label' => 'Ações', 'no-export' => true, 'width' => 15]
        ];

        $data = [];
        foreach($animais as $animal){
        $s = substr($animal->prontuario, strlen($animal->prontuario) - 150);
        $s = substr($s, strpos($s," "));
        $s = str_replace('<p>', " ", $s);

            $btnEdit = '<a href="'. route('editar_animal',['id'=>$animal->id]).'" class=" mx-2"><i class="fas fa-user-edit text-info" aria-hidden="true"></i></a>';
            $btnDelete='<a href="#" class="mx-2 deletebutton" data-toggle="modal" data-target="#deletaranimal" data-animalid="'.$animal->id.'" data-animalnome="'.$animal->nome.'"><i class="fas fa-trash text-danger" aria-hidden="true"></i></a>';
            array_push($data, array($animal->nome, $animal->sexo,'<nobr>'."...".$s.'</nobr>','<nobr>'.$btnEdit.$btnDelete.'</nobr>'
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
<form id="deleteForm" method="post" action="{{route('deletar_animal', 1)}}">
    @csrf
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="modal fade" id="deletaranimal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <p class="text-center" id=nome_animal></p>

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
        var animalid = this.dataset['animalid'];
        var animalnome = this.dataset['animalnome'];
        console.log("ID " + animalid + " nome " + animalnome)
        $('#nome_animal').html("<b>" + animalnome + "</b>");
        var gambi = $('#deleteForm').attr('action');
        var s = gambi.substr(gambi.indexOf('deletar/') + 8);
        var final = gambi.replace(s, animalid)
        $('#deleteForm').attr('action', final);
    });
</script>

@stop