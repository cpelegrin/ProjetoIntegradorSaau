@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1 class="m-0 text-dark">Notícias - Cadastro</h1>
@stop

@section('content')
<div class="row">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Input Addon</h3>
        </div>
        <div class="card-body">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control" placeholder="Username">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control">
                <div class="input-group-append">
                    <span class="input-group-text">.00</span>
                </div>
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                </div>
                <input type="text" class="form-control">
                <div class="input-group-append">
                    <span class="input-group-text">.00</span>
                </div>
            </div>
            <h4>With icons</h4>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" placeholder="Email">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-check"></i></span>
                </div>
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-dollar-sign"></i>
                    </span>
                </div>
                <input type="text" class="form-control">
                <div class="input-group-append">
                    <div class="input-group-text"><i class="fas fa-ambulance"></i></div>
                </div>
            </div>
            <h5 class="mt-4 mb-2">With checkbox and radio inputs</h5>
            <div class="row">
                <div class="col-lg-6">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <input type="checkbox">
                            </span>
                        </div>
                        <input type="text" class="form-control">
                    </div>

                </div>

                <div class="col-lg-6">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><input type="radio"></span>
                        </div>
                        <input type="text" class="form-control">
                    </div>

                </div>

            </div>

            <h5 class="mt-4 mb-2">With buttons</h5>
            <p>Large: <code>.input-group.input-group-lg</code></p>
            <div class="input-group input-group-lg mb-3">
                <div class="input-group-prepend">
                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                        Action
                    </button>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item"><a href="#">Action</a></li>
                        <li class="dropdown-item"><a href="#">Another action</a></li>
                        <li class="dropdown-item"><a href="#">Something else here</a></li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-item"><a href="#">Separated link</a></li>
                    </ul>
                </div>

                <input type="text" class="form-control">
            </div>

            <p>Normal</p>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <button type="button" class="btn btn-danger">Action</button>
                </div>

                <input type="text" class="form-control">
            </div>

            <p>Small <code>.input-group.input-group-sm</code></p>
            <div class="input-group input-group-sm">
                <input type="text" class="form-control">
                <span class="input-group-append">
                    <button type="button" class="btn btn-info btn-flat">Go!</button>
                </span>
            </div>

        </div>

    </div>
</div>
@stop