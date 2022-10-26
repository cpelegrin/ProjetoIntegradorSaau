@extends('adminlte::page')

@section('title', 'Cadastrar Funcionário')

@section('content_header')

@stop

@section('content')
<div class="row">
    <div class="col-8 m-3 ">
        <div class="card">
            <div class="card-body">
                <div class="card multisteps-form__panel p-3 m-3 border-radius-xl bg-white js-active"
                    data-animation="FadeIn">
                    <h3 class="font-weight-bolder mb-0">Cadastrar Funcionário</h3>
                    <div class="multisteps-form__content">
                        <!--Formulario de cadastro-->
                        <form action="{{route('salvar_funcionario')}}" method="post">
                            @csrf
                            <div class="row mt-3">
                                <!--Nome-->
                                <div class="col-12 col-sm-6">
                                    <label>Nome</label>
                                    <input class="multisteps-form__input form-control" required name="name" type="text"
                                        placeholder="Nome" onfocus="focused(this)" onfocusout="defocused(this)">
                                </div>
                                <!--===============-->

                                <!--Email-->
                                <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                    <label>Email</label>
                                    <input class="multisteps-form__input form-control" required name="email"
                                        type="email" placeholder="Email" onfocus="focused(this)"
                                        onfocusout="defocused(this)">
                                </div>
                            </div>
                            <!--==============-->

                            <!--Senha-->
                            <div class="row mt-3">
                                <div class="col-12 col-sm-6">
                                    <label>Senha</label>
                                    <input class="multisteps-form__input form-control" required name="password"
                                        type="password" placeholder="******" onfocus="focused(this)"
                                        onfocusout="defocused(this)">
                                </div>

                                <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                    <label>Repetir Senha</label>
                                    <input class="multisteps-form__input form-control" required name="password"
                                        type="password" placeholder="******" onfocus="focused(this)"
                                        onfocusout="defocused(this)">
                                </div>
                            </div>

                            <!--=============-->

                            <!--Permissao-->
                            <div class="form-group row">
                                <div class="form-group">
                                    <label class="ml-2 mt-2">Permissão</label>
                                    <select name="permissao" class="form-control ml-2">
                                        <option value="Funcionario">Funcionário</option>
                                        <option value="Administrador">Administrador</option>
                                    </select>
                                </div>
                            </div>
                            <!--==============-->
                            <div class="button-row d-flex mt-4">
                                <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="submite"
                                    title="Cadastrar">Cadastrar</button>
                            </div>
                        </form>
                        <!--==============-->


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop