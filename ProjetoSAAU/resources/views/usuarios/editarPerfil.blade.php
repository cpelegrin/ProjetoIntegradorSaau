@extends('adminlte::page')

@section('title', 'Perfil')

@section('content_header')

@stop

@section('content')


<style>
    label.labelInput input[type="file"] {
        position: fixed;
        top: -1000px;
    }
</style>


<div class="row ">
    <div class="col-8 ml-2 ">
        <div class="card ">
            <div class="card-body ">
                <div class="content ">
                    <div class="container-fluid ">
                        <form action="{{route('salvar_perfil', $user->id)}}" enctype="multipart/form-data"
                            method="post">
                            @csrf
                            <!--Foto do perfil-->
                            <div style="  margin:auto ;" class="col-md-12 ">
                                <div class="card card-primary card-outline">
                                    <div class="card-body box-profile">
                                        <div class="text-center">
                                            <img style="width:150px ;" class="profile-user-img  img-fluid img-circle"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIMAAACDCAMAAACZQ1hUAAAAOVBMVEX///+ZmZmWlpa6urqTk5OcnJyxsbGqqqrOzs6Pj4/5+fm0tLTq6urx8fHDw8O/v7/X19ekpKTg4OCJO8oQAAAEGUlEQVR4nO1ai5ajIAzVAD4QWvX/P3YV22oVAgGdes5yZ6Yze1bwEvIipCgyMjIyMjIyMjL+O0it+gfrqnpCxx690vJvCeiGDbzlHN7g078G1ui/IjAyaDmURwBvgY3XE1APAbb3f3iAeKhrGVQlRwgs4FBdx0JVLSaCjTDai1joyqoEDha8ukA/mzKcgWFRNiczkLVfD/bg9akeoydsw0YUvD+PwpMuhJconmdRqGIpTCSqUxjEqMKGxBlKoUWMKqwAkWykMpHCTCJVEnUqhYlEnUbBq44mcnueSVNMj1FyGCrGWDWA57kEE+3RqUE0atlqqRpcbeKdlcQoAHzP26NbwmP1EtNH3h0e7xDKsXrZIHPyh2XAAxsQFUU1EqwdSoaoMJQxrqpyU3BKFtk9iDBQhQnWpWGYFnN6eoeIwaoMCxCVoAtCte4VIVurhXtUSxUEpg1Hs1zRnacRCpECx45SI+YkaILATB0wK9OYX3PrkQ3ItpYD5nflgIwsKRRGZDWAZmeyRigA5UDMEjhgQxmBAxqIE/YCwimgzqFEk1TMQZBcBBYxPU4Xc/Gk6Impg2cinH64QuB7OikEMtY3NDSfwvyMWY3bxDCjNkNDswhcJaeJ3IIYPByClRJPp0tnmiyjRx6BBYvXVNblSFUOqGkSQgZuFjNA2EioATwqGW4YzhxAfFZ5JCEnCsInBjz32MKZv6wcSjBeQprv6UMWsmlh/m9hPl0zBOcxjrAjJpSv7+kDhl7LGfMQ3czvFstDr19WDqFnHTuHeebl6/UWAMGaUSmtms6sHsRbWsvXBRxeEli2ZOIxv5LPMNXbN7/1jyQOdn0QHxrmHTCdtOfn4PMhVlGZB2xKEawPLrsQ7x8hOBdDXXUTKtax+Vddl3MR07Bb6Fo5hNqFzz9MivAc1T76SD0+ha+WGuwfcD8JbYfErA4v7Qf7SdTr+wryGi1hBccLJG6C8E/SI3Wh4Ljpzh+gDon/2p1bB+cPzjwquMjn3I/gPMplGDz8eMDsJAgHDHtiSjo32/0cIa/WdqWk1PeklQOlBGGbgFjLsR40COcsm0IQlME5B+m8aUnRydcQllMf6dx9rD8Q6xczLC4/bXywc1lxcHXEdezrUcExd4t9DkCsR+3tO6r4v4t95ALlLm61MbV/uZuDXKj9FgTFsFekiWHnY2IK3sVuHRH16q8JIO5C6gmJy9jeX8TdgGxjX9z9xXaGdA6RM2zOOpEzrMYZfc+63ogkyyH6Xm9dR+T9ZOp4g/clGdQsBu/NTGvF+CSnEIO3FBIbMW5w73+L/oc79IHcoh+muENfUHGL/qhb9Indol+uuEPfYHGL/sniDn2kC4uQftryQgaGxc/7ig1+3l+94Od95gt+3m+fkZGRkZGRkZFxB/wDZKEqi1aDWCwAAAAASUVORK5CYII=">
                                        </div>
                                        <h3 class="profile-username text-center">{{ isset($user) ? $user->name : ''}}
                                        </h3>
                                        <p class="text-muted text-center">{{ isset($perfil) ? $perfil->profissao : ''}}
                                        </p>

                                        <div style="width:250px ;margin: auto;" class="btn btn-primary btn-block">
                                            <label class="labelInput">
                                                <input name="foto_perfil" type="file" required />
                                                <span>Update</span>
                                            </label>
                                        </div>





                                    </div>
                                </div>

                            </div>


                    </div>


                    <div class="card-content p-3">

                        <!--Nome-->
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nome completo</label>
                                    <input type="text" class="form-control border-input" name="nome" placeholder="Nome"
                                        value="{{ isset($user) ? $user->name : ''}}">
                                </div>
                            </div>
                            <!--============-->

                            <!--email-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control border-input" name="email"
                                        value="{{ isset($user) ? $user->email : ''}}" placeholder="Email">
                                </div>
                            </div>
                            <!--===============-->
                        </div>



                        <!--Endereco-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Endereço</label>
                                    <input type="text" class="form-control border-input" name="endereco"
                                        value="{{ isset($perfil) ? $perfil->endereco : ''}}" placeholder="Endereço">
                                </div>
                            </div>
                        </div>
                        <!--===============-->

                        <div class="row">
                            <div class="col-md-4">
                                <!--Profissao-->
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Profissão</label>
                                    <input type="text" value="{{ isset($perfil) ? $perfil->profissao : ''}}"
                                        name="profissao" class="form-control">
                                    <span class="material-input"></span>
                                </div>
                            </div>
                            <!--===============-->

                            <div class="col-md-4">
                                <!--Telefone-->
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Telefone</label>
                                    <input type="text" placeholder="(xx)xxxxx-xxxx"
                                        value="{{ isset($perfil) ? $perfil->telefone : ''}}" name="telefone"
                                        class="form-control">
                                    <span class="material-input"></span>
                                </div>
                            </div>
                            <!--===============-->

                            <!--Permissao-->
                            <div class="col-md-4">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Permissão</label>
                                    <input type="text" value="{{ isset($user) ? $user->permissao : ''}}"
                                        name="profissao" disabled="" class="form-control">
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
                                    <textarea rows="5" name="sobremim" class="form-control border-input"
                                        placeholder="Descrição">
                                                            {{ isset($perfil) ? $perfil->sobremim : ''}}
                                                        </textarea>
                                </div>
                            </div>
                        </div>
                        <!--===============-->

                        <div class="text-center">
                            <button type="submit" class="btn btn-info btn-fill btn-wd">Salvar</button>
                        </div>
                    </div>
                    </form>
                    <!--============-->


                </div>



            </div>



        </div>
        <div class="card mt-4" id="password">
            <div class="card-header">
                <h5>Editar conta</h5>
            </div>
            <div class="card-body pt-0">
                <label class="form-label">Email</label>
                <div class="form-group">
                    <input class="form-control" type="email" placeholder="Email" onfocus="focused(this)"
                        onfocusout="defocused(this)">
                </div>
                <label class="form-label">Senha atual</label>
                <div class="form-group">
                    <input class="form-control" type="password" placeholder="**********" onfocus="focused(this)"
                        onfocusout="defocused(this)">
                </div>
                <label class="form-label">Nova senha</label>
                <div class="form-group">
                    <input class="form-control" type="password" placeholder="**********" onfocus="focused(this)"
                        onfocusout="defocused(this)">
                </div>
                <label class="form-label">Confirme a senha</label>
                <div class="form-group">
                    <input class="form-control" type="password" placeholder="**********" onfocus="focused(this)"
                        onfocusout="defocused(this)">
                </div>
                <button class="btn bg-gradient-dark btn-sm float-end mt-6 mb-0">Editar cadastro</button>
            </div>

        </div>


        <div class="card mt-4" id="delete">
            <div class="card-header">
                <h5>Deletar conta</h5>
                <p class="text-sm mb-0">Depois de excluir sua conta, não há como voltar atrás. Por favor, tenha certeza.
                </p>
            </div>
            <div class="card-body d-sm-flex pt-0">


                <a class="btn bg-gradient-danger mb-1 mt-2"
                    href="{{route('deletar_usuario',['id'=>$user->id])}}">Deletar Conta</a>
            </div>
        </div>
    </div>


</div>

@stop