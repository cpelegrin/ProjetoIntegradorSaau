@extends('adminlte::page')

@section('title', 'AdminLTE')
@section('modalTitle','')

@section('content_header')

@stop

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<style>
    label.labelInput input[type="file"] {
        position: fixed;
        top: -1000px;
    }
</style>
@endsection

@section('content')


<div class="row">

    <div class="col-11">
        <!--Campo para foto de perfil-->
        <div style="  margin:auto ;" class="col-md-12 ">
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">

                    <!---Imagem de perfil---->
                    <div class="text-center">
                        <img id="preview-image" class="rounded-circle mt-5" width="200px"
                            src="{{ $perfil->imagem->url ?? 'https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg' }}">
                    </div>

                    @isset($perfil->imagem)
                    <img src="{{ url('storage/users'. $perfil->imagem) }}" alt="{{$perfil->name}}" width="250px">
                    @endisset
                    <!------------>

                    <!----Nome----->
                    <h3 class="profile-username text-center">{{ isset($user) ? $user->name : ''}}
                    </h3>
                    <!------------->

                    <!----Profissao---->
                    <p class="text-muted text-center">{{ isset($perfil) ? $perfil->profissao : ''}}
                    </p>
                    <!-------->
                    <form action="{{route('salvar_perfil', $user->id)}}" enctype="multipart/form-data" method="post">
                        @csrf
                        <!----Botao para arquivar a foto---->
                        <button type="button" style="width:250px; margin: auto;" class="btn btn-primary btn-block p-0">
                            <label class="labelInput py-2" style="width:250px">
                                <spam>Update</spam>
                                <input id="imagem" type="file" name="imagem" accept=".png, .jpg, .jpeg" hidden>

                            </label>
                        </button>
                        <!--------------->
                </div>
            </div>
        </div>
        <!----------------->
        <!------Formulario de informaçoes do perfil------->
        <div class="card col-md-12">
            <div class="card-body">
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
                                <input type="text tel" placeholder="(xx)xxxxx-xxxx"
                                    value="{{ isset($perfil) ? $perfil->telefone : ''}}" name="telefone"
                                    class="form-control tel">
                                <span class="material-input"></span>
                            </div>
                        </div>
                        <!--===============-->

                        <!--Permissao-->
                        <div class="col-md-4">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label">Permissão</label>
                                <input type="text" value="{{ isset($user) ? $user->permissao : ''}}" name="profissao"
                                    disabled="" class="form-control">
                                <span class="material-input"></span>
                            </div>
                        </div>
                    </div>
                    <!--===============-->

                    <!--Endereco-->
                    <p style="font-weight: bolder;">Endereço</p>
                    <div class="row justify-content-between mt-3">
                        <div class="col-8">
                            <x-adminlte-input id="cepInserted" onkeyup="delay(isValid(this, 9, event), 500)" name="cep"
                                placeholder="Cep" value="{{ isset($perfil) ? $perfil->cep : '' }}">
                                <x-slot name="prependSlot">
                                    <div class="input-group-text" title="CEP" style="width: 48px">
                                        <i class="far fa-address-card"></i>
                                    </div>
                                </x-slot>
                            </x-adminlte-input>
                        </div>
                        <div class="col-4">
                            <button id="cepButton" class="btn btn-labeled btn-default" onclick="consultarCep(event)">
                                <i id="cepSearch" class="fas fa-search"></i> Pesquisar
                            </button>
                        </div>
                    </div>



                    <x-adminlte-textarea id="end_logradouro" name="logradouro" placeholder="Endereço" rows=2>
                        <x-slot name="prependSlot">
                            <div class="input-group-text" title="Endereço" style="width: 48px">
                                <i class="fas fa-lg fa-building"></i>
                            </div>
                        </x-slot>
                        {{ $perfil->logradouro ?? old('logradouro')}}
                    </x-adminlte-textarea>

                    <div class="row justify-content-between">
                        <div class="col-6 m-0">
                            <x-adminlte-input id="end_cidade" name="cidade" placeholder="Cidade"
                                value="{{ isset($perfil) ? $perfil->cidade : '' }}">
                                <x-slot name="prependSlot">
                                    <div class="input-group-text" title="Cidade" style="width: 48px">
                                        <i class="fas fa-city"></i>
                                    </div>
                                </x-slot>
                            </x-adminlte-input>
                        </div>
                        <div class="col-6 m-0">
                            <x-adminlte-input type="text" name="num" placeholder="Número"
                                value="{{ isset($perfil) ? $perfil->num : '' }}">
                                <x-slot name="prependSlot">
                                    <div class="input-group-text" title="Número" style="width: 48px">
                                        <i class="fas fa-house-user"></i>
                                    </div>
                                </x-slot>
                            </x-adminlte-input>
                        </div>

                    </div>
                </div>
                <!--===============-->

                <!--Sobre mim-->
                <div class="row ">
                    <div class="col-12 ">
                        <div class="form-group" style="margin-left:98px ;">
                            <div class="input-group-prepend">
                                <!-- teste do summernote -->
                                @php
                                $config = [
                                'height' => '300',
                                'width' => '1200',
                                'toolbar' => [
                                // [groupName, [list of button]]
                                ['style', ['bold', 'italic', 'underline', 'clear']],
                                ['font', ['strikethrough']],
                                ['fontsize', ['fontsize']],
                                ['color', ['color']],
                                ['para', ['ul', 'ol', 'paragraph']],
                                ['height', ['height']],
                                ['insert', ['link', 'picture']],
                                ['view', ['fullscreen']],
                                ],
                                ];
                                @endphp




                                <x-adminlte-text-editor name="sobremim" label="Sobre mim" igroup-size="sm"
                                    placeholder="Sobre mim..." :config="$config">

                                    {{ isset($perfil) ? $perfil->sobremim : '' }}

                                </x-adminlte-text-editor>

                            </div>
                        </div>
                    </div>
                </div>

                <!--=====Botao para salvar as informacoes do perfil======-->
                <div class="text-center">
                    <button type="submit" class="btn btn-info btn-fill btn-wd">Salvar</button>
                </div>
                <!--===============-->
                </form>


                <!--============-->
            </div>
            <!--===========-->
        </div>
    </div>
</div>



<!--=====Campo para mudar a senha ======-->
<div class="card col-11 mt-2" id="password">
    <div class="card-header">
        <h5>Mudar senha</h5>
    </div>
    <div class="card-body pt-0">
        <form method="post" action="{{route('resetar_senha', $user->id)}}">
            @csrf
            <!--=====Nova senha======-->
            <label class="form-label">Nova senha</label>
            <div class="form-group">
                <input class="form-control" required name="password" type="password" placeholder="**********">
            </div>
            <!--============-->

            <!--=====Confirme a senha=====-->
            <label class="form-label">Confirme a senha</label>
            <div class="form-group">
                <input class="form-control" required name="password" type="password" placeholder="**********">
            </div>
            <!--============-->

            <!--======Botao de envio do formulario =====-->
            <button type="submit" data-toggle="modal" data-target="#mudarSenha"
                class="btn bg-gradient-dark btn-sm float-end mt-6 mb-0">Editar senha</button>

            <!--============-->
        </form>
    </div>
    <!--============-->
</div>



<!--======Deletar conta=====-->
<div class="card col-11 mt-2" id="delete">
    <div class="card-header">
        <h5>Deletar conta</h5>
        <p class="text-sm mb-0">Depois de excluir sua conta, não há como voltar atrás. Por favor, tenha certeza.
        </p>
    </div>
    <div class="card-body d-sm-flex pt-0">
        <a class="btn bg-gradient-danger mb-1 mt-2" data-toggle="modal" data-target="#excluirConta">Deletar
            Conta</a>
    </div>
</div>
<!--============-->

<!-- Modal de excluir conta -->
<div class="modal fade" id="excluirConta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Deletar conta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Tem certeza de que deseja excluir a sua conta?
            </div>
            <div class="modal-footer">
                <a class="btn btn-secondary" href="{{route('deletar_usuario',['id'=>$user->id])}}">Excluir</a>
                <button type="button" data-dismiss="modal" class="btn btn-danger">Cancelar</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal para trocar senha  -->
<div class="modal fade" id="mudarSenha" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Deletar conta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Tem certeza de que deseja mudar a sua senha?
            </div>
            <div class="modal-footer">
                <button type="submit" data-dismiss="modal" class="btn btn-secondary">Sim</button>
                <button type="button" data-dismiss="modal" class="btn btn-danger">Cancelar</button>
            </div>
        </div>
    </div>
</div>

</div>

@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/cep-promise/dist/cep-promise.min.js"></script>
<script>
    $('#imagem').on('change', function () {
        if (this.files && this.files[0]) {
            var file = new FileReader();
            file.onload = function (e) {
                document.getElementById("preview-image").src = e.target.result;
            };
            file.readAsDataURL(this.files[0]);
        }
    });

    function consultarCep(event) {
        event.preventDefault();
        var cepE = $("#cepInserted").val();



        cepE = cepE.replace("-", "");
        cepE = cepE.replaceAll("_", "");
        console.log(cepE)
        if (cepE.length == 8) {
            $("#cepButton").html(
                '<span class="spinner-border spinner-border-sm" style="width: 1.5rem; height: 1.5rem;" role="status" aria-hidden="true"></span>'
            );
            cep(cepE)
                .then(consultado => {
                    console.log(consultado);
                    $("#end_logradouro").val(
                        `${consultado.street} - ${consultado.neighborhood}`);
                    $("#end_cidade").val(consultado.city);
                    $("#end_estado").val(consultado.state);
                    $("#cepButton").html(
                        '<i id="cepSearch" class="fas fa-search"></i>Pesquisar'
                    );
                    $("#cepInserted").addClass('is-valid');
                    $("#cepInserted").removeClass('is-invalid');
                })
                .catch((err) => {
                    $("#cepButton").html(
                        '<i id="cepSearch" class="fas fa-search"></i>Pesquisar'
                    );
                    toastr.error('Não foi possível encontrar dados sobre o Cep');
                    $("#end_logradouro").val('');
                    $("#end_cidade").val('');
                    $("#end_estado").val('');
                    $("#cepInserted").removeClass('is-valid');
                    $("#cepInserted").addClass('is-invalid');



                })
        } else {
            toastr.error('Digite o Cep corretamente!')
        }
    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.7/jquery.inputmask.min.js"
    integrity="sha512-jTgBq4+dMYh73dquskmUFEgMY5mptcbqSw2rmhOZZSJjZbD2wMt0H5nhqWtleVkyBEjmzid5nyERPSNBafG4GQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    const initForm = () => {
        Inputmask('999.999.999-99').mask('#cpf');
        Inputmask('99.999.999-9').mask('#rg');
        Inputmask('99999-999').mask('#cepInserted');
        Inputmask(['(99)9999-9999', '(99)9 9999-9999']).mask('.tel');
    }
    initForm();
</script>

<script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.1/dist/iconify-icon.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    toastr.options.preventDuplicates = true;
</script>


@if(Session::has('success'))
<script>
    toastr.success("{{ Session::get('success') }}")
</script>
@endif



@if(Session::has('error'))
<script>
    toastr.error("{{ Session::get('error') }}")
</script>
@endif


@if($errors->any())
@foreach ($errors->all() as $error)
<script>
    toastr.error('{{$error}}')
</script>
@endforeach
@endif

@endsection

@section('plugins.Summernote', true)