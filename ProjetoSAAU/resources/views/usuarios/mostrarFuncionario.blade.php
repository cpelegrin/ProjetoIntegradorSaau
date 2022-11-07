@extends('adminlte::page')

@section('title', 'Funcionários')

@section('content_header')
@stop

@section('content')

<div class="row ">
    <div class="col-10 ">
        <div class=" ">
            <div class="card-body">
                <div class="col-md-10">
                    <div class="card">
                        <!--Titulo da tabela-->
                        <div class="card-header card-header-icon" data-background-color="rose">
                            <i class="material-icons">
                                <h4>Funcionários cadastrados </h4>
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
                                            <th>Permissão</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!--===============-->

                                        <!--Corpo da tabela-->

                                        {{-- Setup data for datatables --}}
                                        @php
                                        $heads = [
                                        'Nome',
                                        'Email',
                                        ['label' => 'Actions', 'no-export' => true, 'width' => 40],
                                        ];


                                        $data = [];
                                        foreach($funcionarios as $funcionario){
                                        array_push($data, array($funcionario->name, $funcionario->email,
                                        '<a class="btn btn-xs btn-default text-primary mx-1 shadow" href="#" title="Edit"><i class="fa fa-lg fa-fw fa-pen"></i></a>',
                                        '<a class="btn btn-xs btn-default text-danger mx-1 shadow" href="#" title="Delete"><i class="fa fa-lg fa-fw fa-trash"></i></a>',
                                        '<a class="btn btn-xs btn-default text-teal mx-1 shadow" href="#" title="Details"><i class="fa fa-lg fa-fw fa-eye"></i></a>'
                                        )
                                        );
                                        }
                                        $config = ['data' => $data];
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

                                        <form id="deleteForm" method="get" action=" route('remover.noticias', $removernoticias->id)">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        </form>
                                        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                    </div>
                                                    <input type="text" name="email_id" id="email_id" value="$noticia->titulo,$noticia->resumo">
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                        <button type="submit" class="btn btn-danger">Deletar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <script type="text/javascript">
                                            $('deleteModal').on('show.bs.modal', function(event) {
                                                var button = $(event.relatedTarget); // Button that triggered the modal
                                                var recipientId = button.data('id');
                                                console.log(recipientId);
                                                var modal = $(this);
                                                modal.find('#email_id').val(recipientId);
                                            })
                                        </script>



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