@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1 class="m-0 text-dark">
    Notícias - Cadastro
</h1>

@stop

<script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.1/dist/iconify-icon.min.js"></script>

@section('content')
<div class="row">
    <div class="card card-info col-6">
        <div class="card-header">
            <h3 class="card-title">Cadastro de Notícias</h3>
        </div>
        <div class="card-body">
            <form method="post" action="{{Route('salvar')}}">
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" title="Teste">
                            <iconify-icon icon="arcticons:news"></iconify-icon>
                        </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Título">
                </div>

                <!--  -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" title="Teste">
                            <iconify-icon icon="arcticons:news"></iconify-icon>
                        </span>
                    </div>
                    <textarea class="form-control" placeholder="Resumo" rows="2"></textarea>
                </div>


                <!-- Img -->
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-file-upload"></i>
                        </span>
                    </div>
                    <div class="custom-file">
                        <input id="selectimg" type="file" class="custom-file-input" name="foto_noticia" />
                        <label id="imglabel" class="custom-file-label" for="selectimg">Selecione a imagem</label>
                    </div>
                </div>
                <!--  -->


                <div class="mt-2">
                    <input type="submit" value="Enviar" class="btn btn-info" />
                </div>

            </form>

        </div>

    </div>
</div>
</div>
</div>
@stop