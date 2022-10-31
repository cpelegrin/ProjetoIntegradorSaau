@extends('adminlte::page')
@section('title', 'Lista de animais')
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
                                <h4>Lista dos animais cadastrados </h4>
                            </i>
                        </div>
                        <!--===============-->
                        <div class="card-content pl-2">
                            <div class="table-responsive">
                                <table class="table">
                                    <!--Cabecalho da tabel-->
                                    <thead>
                                        <tr>
                                            <th>Título</th>
                                            <th>Resumo</th>
                                            <th>Ùltima atualização</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!--===============-->

                                        <!--Corpo da tabela-->
                                        @foreach ($lista as $animal)
                                        <tr>
                                            <td>{{$animal->titulo}}</td>
                                            <td>{{$animal->resumo}}</td>
                                            <td>{{$->update_at}}</td>
                                            <td class="td-actions text-right">
                                                <a href="javascript:;" class="mx-2" data-bs-toggle="tooltip" data-bs-original-title="Edit product">
                                                    <i class="fas fa-eye text-secondary" aria-hidden="true"></i>
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