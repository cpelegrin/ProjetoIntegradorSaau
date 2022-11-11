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
                    <a href="{{route('deletar_funcionario',['id'=>$funcionario->id])}}" class=" mx-2" data-bs-toggle="tooltip" data-toggle="modal" data-target="#deletarfunc">
                        <i class=" fas fa-trash text-danger" aria-hidden="true"></i>
                    </a>

                </td>
            </tr>
            @endforeach

        </tbody>
    </table>



</body>

</html>

<!-- Modal -->
<form id="deleteForm" method="get" action=" route('deletar.funcionario', $deletarfuncioario->id)">
    @csrf

    <div class="modal fade" id="deletarfunc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">


                    <!-- Modal -->
                    <div id="modalUser" class="modal fade" role="dialog" data-backdrop="static">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Remoção de Usuário</h4>
                                </div>
                                <div class="modal-body">

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal" onclick="newDoc()">Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Modal title</h4>
                                </div>
                                <div class="modal-body">
                                    <p>One fine body&hellip;</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                    <br>
                    <br>
                    <br>

                    </body>

                    <h5 class="modal-title" id="exampleModalLabel">Confirmação</h5>


                    <div class="modal-body">

                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-danger">Excluir</button>
                </div>

            </div>
        </div>
    </div>
</form>

<script type="text/javascript">
    $('deleteModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var recipientId = button.data('id');
        console.log(recipientId);
        var modal = $(this);
        modal.find('#email_id').val(recipientId);
    })
</script>
@stop