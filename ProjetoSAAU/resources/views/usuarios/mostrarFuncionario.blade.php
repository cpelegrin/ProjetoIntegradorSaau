@extends('adminlte::page')

@section('title', 'Funcionários')

@section('content_header')
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
@endsection

@section('content')
<input id="myInput" type="text" placeholder="Search..">
<br><br>

<table>
    <thead>
        <tr>
            <th>Nome</th>

            <th>Email</th>
        </tr>
    </thead>
    <tbody id="myTable">
        <!--Corpo da tabela-->
        @foreach ($funcionarios as $funcionario)

        <tr>
            <td>{{$funcionario->name}}</td>
            <td>{{$funcionario->email}}</td>
            <td class="td-actions text-right">
                <a href="{{route('editar_funcionario',['id'=>$funcionario->id])}}" data-bs-toggle="modal" data-bs-target="#exampleModal" class=" mx-2" data-bs-original-title="Preview product">
                    <i class="fas fa-user-edit text-info" aria-hidden="true"></i>
                </a>
                <a href="#" class="mx-2 deletebutton" data-toggle="modal" data-target="#deletarfunc" data-funcionarioid="{{$funcionario->id}}" data-funcionarionome="{{$funcionario->name}}">
                    <i class=" fas fa-trash text-danger" aria-hidden="true"></i>
                </a>

            </td>
        </tr>
        @endforeach

    </tbody>
</table>

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

@endsection