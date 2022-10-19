@extends('adminlte::page')

@section('title', 'Cadastrar Usuario')

@section('content_header')

@stop

@section('content')
<div class="card card-info mt-5">
    <div class="card-header">
        <h3 class="card-title">Cadastro de Funcionários</h3>
    </div>


    <form method="POST" action="{{route('create')}}" class="form-horizontal">
        @csrf
        <div class="card-body">

            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Nome Completo</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="inputPassword3" placeholder="Nome">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="input-group col-sm-10 mb-1">
                    <div class="input-group-prepend ">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    </div>
                    <input type="email" name="email" class="form-control" placeholder="Email">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Senha</label>
                <div class="col-sm-10">
                    <input name="password" type="password" class="form-control" id="inputPassword3" placeholder="Senha">
                </div>
            </div>
            <div class="form-group row">



                <div class="form-group">
                    <label class="ml-2">Permissão</label>
                    <select name="permissao" class="form-control ml-2">
                        <option value="funcionario">Funcionário</option>
                        <option value="administrador">Administrador</option>

                    </select>
                </div>
            </div>


        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-info">Cadastrar</button>
            <button type="submit" class="btn btn-default float-right">Cancel</button>
        </div>

    </form>
</div>



@stop