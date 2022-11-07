@extends('adminlte::page')

@section('title', 'Funcionários')

@section('content_header')
@stop
@section ('js')
@endsection

@section('content')

<!DOCTYPE html>
<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
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
</head>

<body>

    <h2>Filterable Table</h2>
    <p>Type something in the input field to search the table for first names, last names or emails:</p>
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
                    <a href="javascript:;" class="mx-2" data-bs-toggle="tooltip" data-bs-original-title="Edit product">
                        <i class="fas fa-eye text-secondary" aria-hidden="true"></i>
                    </a>
                    <a href="{{route('editar_funcionario',['id'=>$funcionario->id])}}" data-bs-toggle="modal" data-bs-target="#exampleModal" class=" mx-2" data-bs-toggle="tooltip" data-bs-original-title="Preview product">
                        <i class="fas fa-user-edit text-info" aria-hidden="true"></i>
                    </a>
                    <a href="{{route('deletar_funcionario',['id'=>$funcionario->id])}}" class=" mx-2" data-bs-toggle="tooltip" data-bs-original-title="Delete product">
                        <i class="fas fa-trash text-danger" aria-hidden="true"></i>
                    </a>

                </td>
            </tr>
            @endforeach

        </tbody>
    </table>



</body>

</html>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

@stop