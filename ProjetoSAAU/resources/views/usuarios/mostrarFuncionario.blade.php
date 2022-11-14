@extends('adminlte::page')

@section('title', 'Funcionários')


@section('content_header')

<h1 class="m-0 text-dark">
    Lista de Funcionários
</h1>

@stop

@section('css')
<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endsection

@section('content')
<div class="row">
    <div class="card card-info col-6">
        <div class="card-header">
            <h3 class="card-title">Cadastro de Notícias</h3>
        </div>
        <div class="card-body">

            {{-- Setup data for datatables --}}
            @php
            $heads = [
            'Nome',
            'Email',
            ['label' => 'Ações', 'no-export' => true, 'width' => 15]
            ];

            $data = [];
            foreach($funcionarios as $funcionario){

            $btnEdit = '<a href="'. route('editar_funcionario',['id'=>$funcionario->id]).'" class=" mx-2"><i class="fas fa-user-edit text-info" aria-hidden="true"></i></a>';
            $btnDelete='<a href="#" class="mx-2 deletebutton" data-toggle="modal" data-target="#deletarfunc" data-funcionarioid="'.$funcionario->id.'" data-funcionarionome="'.$funcionario->name.'"><i class="fas fa-trash text-danger" aria-hidden="true"></i></a>';
            array_push($data, array($funcionario->name, $funcionario->email,'<nobr>'.$btnEdit.$btnDelete.'</nobr>'
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
</div>
<!-- Modal -->
<form id="deleteForm" method="post" action="{{route('deletar_funcionario', 1)}}">
    @csrf
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="modal fade" id="deletarfunc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <p class="text-center" id=nome_funcionario></p>

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
    $('#table1').DataTable({
        "language": {
            "lengthMenu": "Display _MENU_ records per page",
            "zeroRecords": "Nothing found - sorry",
            "info": "Sho page _PAGE_ of _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtered from _MAX_ total records)"
        }
    });
</script>
<script>
    $('.deletebutton').on('click', function() {
        console.log(this);
        var funcionarioid = this.dataset['funcionarioid'];
        var funcionarionome = this.dataset['funcionarionome'];
        console.log("ID " + funcionarioid + " nome " + funcionarionome)
        $('#nome_funcionario').html("<b>" + funcionarionome + "</b>");
        var gambi = $('#deleteForm').attr('action');
        var s = gambi.substr(gambi.indexOf('deletar/') + 8);
        var final = gambi.replace(s, funcionarioid)
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