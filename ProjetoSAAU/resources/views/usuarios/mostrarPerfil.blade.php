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
                                        <img   id="preview-image" class="rounded-circle mt-1"  width="200px" src="@if(isset($perfil->imagem)) {{url('storage/'. $perfil->imagem)}} @else https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg @endif">
                                    </div>
                                    <hr>
                                    
                                </div>
                               
                                <div class="card-content">
                                    
                                    <p class="description pr-2 pl-2">
                                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                        
                                    </p>
                                    
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
                                            <input type="text" class="form-control border-input" disabled="" placeholder="" value="">
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="email" disabled="" class="form-control border-input" placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Telefone</label>
                                            <input type="text" disabled="" class="form-control border-input" placeholder="Company" value="Chet">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Permissão</label>
                                            <input type="text" disabled="" class="form-control border-input" placeholder="Last Name" value="Faker">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Bairro</label>
                                            <input type="text" disabled="" class="form-control border-input" placeholder="Home Address" value="Melbourne, Australia">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Número</label>
                                            <input type="text" disabled="" class="form-control border-input" placeholder="City" value="Melbourne">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Cidade</label>
                                            <input type="text" disabled="" class="form-control border-input" placeholder="Country" value="Australia">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Profissão</label>
                                            <input type="text" disabled="" class="form-control border-input" placeholder="ZIP Code">
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