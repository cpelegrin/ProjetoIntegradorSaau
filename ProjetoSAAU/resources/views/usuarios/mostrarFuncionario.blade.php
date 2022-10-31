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
                                        @foreach ($funcionarios as $funcionario)
                                        <tr>
                                            <td>{{$funcionario->name}}</td>
                                            <td>{{$funcionario->permissao}}</td>
                                            <td class="td-actions text-right">
                                                <a href="javascript:;" class="mx-2" data-bs-toggle="tooltip" data-bs-original-title="Edit product">
                                                    <i class="fas fa-eye text-secondary" aria-hidden="true"></i>
                                                </a>
                                                <a href="{{route('editar_funcionario',['id'=>$funcionario->id])}}" class="mx-2" data-bs-toggle="tooltip" data-bs-original-title="Preview product">
                                                    <i class="fas fa-user-edit text-info" aria-hidden="true"></i>
                                                </a>
                                                <a href="{{route('deletar_funcionario',['id'=>$funcionario->id])}}" class="mx-2" data-bs-toggle="tooltip" data-bs-original-title="Delete product">
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