@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@stop

@section('content')
<div class="row">
    <div class="col-12 mt-5">
        <div class="content">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-lg-4  col-md-5">
                        <div class="col-md-12">
                            <div class="card card-profile">
                                <div class="card-avatar">
                                    <div class="text-center">
                                        <img   id="preview-image" class="rounded-circle mt-4"  width="190px" src="@if(isset($perfil->imagem)) {{url('storage/'. $perfil->imagem)}} @else https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg @endif">
                                    </div>
                                    <hr>
                                </div>
                                <div class="card-content pl-3  pr-2">
                                    
                                        {{ isset($perfil) ? $perfil->sobremim : '' }}
                                  
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="card p-4">
                            <div class="card-header">
                                <h4>Perfil</h4>
                            </div>
                            <div class="card-content">
                                
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Nome Completo</label>
                                            <input type="text" class="form-control border-input" disabled=""  value="{{ isset($user) ? $user->name : '' }}">
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="email" disabled="" class="form-control border-input" value="{{ isset($user) ? $user->email : '' }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Telefone</label>
                                            <input type="text" disabled="" class="form-control border-input"  value="{{ isset($perfil) ? $perfil->telefone : '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Permissão</label>
                                            <input type="text" disabled="" class="form-control border-input"  value="{{ isset($user) ? $user->permissao : '' }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Endereço</label>
                                            <input type="text" disabled="" class="form-control border-input"  value="{{ isset($perfil) ? $perfil->logradouro: '' }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Número</label>
                                            <input type="text" disabled="" class="form-control border-input"  value="{{ isset($perfil) ? $perfil->num : '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Cidade</label>
                                            <input type="text" disabled="" class="form-control border-input"  value="{{ isset($perfil) ? $perfil->cidade : '' }}">
                                        </div>
                                    </div>
                                 
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Profissão</label>
                                            <input type="text" disabled=""  class="form-control border-input" value="{{ isset($perfil) ? $perfil->profissao : '' }}" >
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
</div>
@stop