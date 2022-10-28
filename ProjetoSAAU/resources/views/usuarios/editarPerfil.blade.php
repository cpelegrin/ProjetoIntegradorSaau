@extends('adminlte::page')

@section('title', 'Perfil')

@section('content_header')

@stop

@section('content')
<div class="row ">
    <div class="col-10 ">
        <div class="card ">
            <div class="card-body ">
                <div class="content ">
                    <div class="container-fluid ">
                        <div class="row ">
                            <!--Foto do perfil-->
                            <div class="col-md-3">
                                <div class="card card-primary card-outline">
                                    <div class="card-body box-profile">
                                        <div class="text-center">
                                            <img class="profile-user-img img-fluid img-circle"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIMAAACDCAMAAACZQ1hUAAAAOVBMVEX///+ZmZmWlpa6urqTk5OcnJyxsbGqqqrOzs6Pj4/5+fm0tLTq6urx8fHDw8O/v7/X19ekpKTg4OCJO8oQAAAEGUlEQVR4nO1ai5ajIAzVAD4QWvX/P3YV22oVAgGdes5yZ6Yze1bwEvIipCgyMjIyMjIyMjL+O0it+gfrqnpCxx690vJvCeiGDbzlHN7g078G1ui/IjAyaDmURwBvgY3XE1APAbb3f3iAeKhrGVQlRwgs4FBdx0JVLSaCjTDai1joyqoEDha8ukA/mzKcgWFRNiczkLVfD/bg9akeoydsw0YUvD+PwpMuhJconmdRqGIpTCSqUxjEqMKGxBlKoUWMKqwAkWykMpHCTCJVEnUqhYlEnUbBq44mcnueSVNMj1FyGCrGWDWA57kEE+3RqUE0atlqqRpcbeKdlcQoAHzP26NbwmP1EtNH3h0e7xDKsXrZIHPyh2XAAxsQFUU1EqwdSoaoMJQxrqpyU3BKFtk9iDBQhQnWpWGYFnN6eoeIwaoMCxCVoAtCte4VIVurhXtUSxUEpg1Hs1zRnacRCpECx45SI+YkaILATB0wK9OYX3PrkQ3ItpYD5nflgIwsKRRGZDWAZmeyRigA5UDMEjhgQxmBAxqIE/YCwimgzqFEk1TMQZBcBBYxPU4Xc/Gk6Impg2cinH64QuB7OikEMtY3NDSfwvyMWY3bxDCjNkNDswhcJaeJ3IIYPByClRJPp0tnmiyjRx6BBYvXVNblSFUOqGkSQgZuFjNA2EioATwqGW4YzhxAfFZ5JCEnCsInBjz32MKZv6wcSjBeQprv6UMWsmlh/m9hPl0zBOcxjrAjJpSv7+kDhl7LGfMQ3czvFstDr19WDqFnHTuHeebl6/UWAMGaUSmtms6sHsRbWsvXBRxeEli2ZOIxv5LPMNXbN7/1jyQOdn0QHxrmHTCdtOfn4PMhVlGZB2xKEawPLrsQ7x8hOBdDXXUTKtax+Vddl3MR07Bb6Fo5hNqFzz9MivAc1T76SD0+ha+WGuwfcD8JbYfErA4v7Qf7SdTr+wryGi1hBccLJG6C8E/SI3Wh4Ljpzh+gDon/2p1bB+cPzjwquMjn3I/gPMplGDz8eMDsJAgHDHtiSjo32/0cIa/WdqWk1PeklQOlBGGbgFjLsR40COcsm0IQlME5B+m8aUnRydcQllMf6dx9rD8Q6xczLC4/bXywc1lxcHXEdezrUcExd4t9DkCsR+3tO6r4v4t95ALlLm61MbV/uZuDXKj9FgTFsFekiWHnY2IK3sVuHRH16q8JIO5C6gmJy9jeX8TdgGxjX9z9xXaGdA6RM2zOOpEzrMYZfc+63ogkyyH6Xm9dR+T9ZOp4g/clGdQsBu/NTGvF+CSnEIO3FBIbMW5w73+L/oc79IHcoh+muENfUHGL/qhb9Indol+uuEPfYHGL/sniDn2kC4uQftryQgaGxc/7ig1+3l+94Od95gt+3m+fkZGRkZGRkZFxB/wDZKEqi1aDWCwAAAAASUVORK5CYII=">
                                        </div>
                                        <h3 class="profile-username text-center">Nome</h3>
                                        <p class="text-muted text-center">Software Engineer</p>
                                        <a href="#" class="btn btn-primary btn-block"><b>Update</b></a>
                                    </div>
                                </div>
                            </div>
                            <!--==================-->
                            <div class="col-lg-8 col-md-7">
                                <div class="card">
                                    <!--Titulo -->
                                    <div class="card-header">
                                        <h4 class="card-title">Editar Perfil</h4>
                                    </div>
                                    <!--============-->
                                    <form action="{{route('salvar_perfil', $user->id)}}" method="post">
                                        @csrf
                                        <div class="card-content p-3">

                                            <!--Nome-->
                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Nome completo</label>
                                                        <input type="text" value="" class="form-control border-input"
                                                            name="nome" placeholder="Nome" value="">
                                                    </div>
                                                </div>
                                                <!--============-->

                                                <!--email-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="email" class="form-control border-input"
                                                            name="email" value="" placeholder="Email">
                                                    </div>
                                                </div>
                                                <!--===============-->
                                            </div>



                                            <!--Endereco-->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Endereço</label>
                                                        <input type="text" class="form-control border-input"
                                                            name="endereco" value="" placeholder="Endereço">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--===============-->

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <!--Profissao-->
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label">Profissão</label>
                                                        <input type="text" value="" name="profissao"
                                                            class="form-control">
                                                        <span class="material-input"></span>
                                                    </div>
                                                </div>
                                                <!--===============-->

                                                <div class="col-md-4">
                                                    <!--Telefone-->
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label">Telefone</label>
                                                        <input type="text" placeholder="(xx)xxxxx-xxxx" value=""
                                                            name="telefone" class="form-control">
                                                        <span class="material-input"></span>
                                                    </div>
                                                </div>
                                                <!--===============-->

                                                <!--Permissao-->
                                                <div class="col-md-4">
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label">Permissão</label>
                                                        <input type="text" value="" name="profissao" disabled=""
                                                            class="form-control">
                                                        <span class="material-input"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--===============-->

                                            <!--Sobre mim-->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Sobre mim</label>
                                                        <textarea rows="5" name="sobremim"
                                                            class="form-control border-input" placeholder="Descrição"
                                                            value="">
                                                        </textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--===============-->

                                            <div class="text-center">
                                                <button type="submit"
                                                    class="btn btn-info btn-fill btn-wd">Salvar</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!--============-->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
@stop