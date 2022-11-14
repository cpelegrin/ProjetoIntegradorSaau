@extends('adminlte::page')

@section('title', 'Cadastrar Animal')

@section('content_header')

@stop

@section('content')
<div class="row">
    <div class="col-8 m-3 ">
        <div class="card">
            <div class="card-body">
                <div class="card multisteps-form__panel p-3 m-3 border-radius-xl bg-white js-active"
                    data-animation="FadeIn">
                    <h3 class="font-weight-bolder mb-0">Cadastrar Animal</h3>
                    <div class="multisteps-form__content">
                        <!--Formulario de cadastro-->
                        <form action="{{route('salvar_animal')}}" method="post">
                            @csrf
                            <div class="row mt-3">
                                <!--Nome-->
                                <div class="col-12 col-sm-6">
                                    <label>Nome</label>
                                    <input class="multisteps-form__input form-control" required name="nome" type="text"
                                        placeholder="Nome" onfocus="focused(this)" onfocusout="defocused(this)">
                                </div>
                                <!--===============-->

                            </div>

                            <!--Sexo-->
                            <div class="col-12 col-sm-6">
                                    <label>Sexo</label>
                                    <input class="multisteps-form__input form-control" required name="sexo" type="text"
                                        placeholder="sexo" onfocus="focused(this)" onfocusout="defocused(this)">
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
