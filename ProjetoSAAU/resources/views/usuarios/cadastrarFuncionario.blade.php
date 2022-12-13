@extends('adminlte::page')

@section('title', 'Cadastrar Funcionário')

@section('content_header')

@stop

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endsection

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
                    <form
                    action="@if(isset($funcionarios)) {{route('atualizar_funcionario',['id'=>$funcionarios->id])}} @else {{ Route('salvar_funcionario')}} @endif"
                    method="post">
                    
                    @csrf
                    <div class="row mt-3">
                        <!--Nome-->
                        <div class="col-12 col-sm-6">
                            <label>Nome</label>
                            <input class="multisteps-form__input form-control" name="name" type="text"
                            placeholder="Nome: " value="{{ $funcionarios->name ?? old('name') }}">
                        </div>
                        <!--===============-->
                        
                        <!--Email-->
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>Email</label>
                            <input class="multisteps-form__input form-control" name="email" type="email"
                            placeholder="Email" value="{{ $funcionarios->email ?? old('email') }}">
                        </div>
                    </div>
                    <!--==============-->
                    
                    <!--Senha-->
                    <div class="row mt-3">
                        <div class="col-12 col-sm-6">
                            <label>Senha</label>
                            @if(isset($funcionarios))
                            <input class="multisteps-form__input form-control" id="password" name="password"
                            type="password" placeholder="******">
                            @else
                            <input class="multisteps-form__input form-control" id="password" name="password"
                            type="password" placeholder="******" required>
                            @endif
                            
                        </div>
                        <!--==============-->
                        
                        <!--======Confirmar senha=======-->
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>Repetir Senha</label>
                            @if(isset($funcionarios))
                            <input class="multisteps-form__input form-control" id="confirm_password"
                            name="password" type="password" placeholder="******">
                            @else
                            <input class="multisteps-form__input form-control" id="confirm_password"
                            name="password" type="password" placeholder="******">
                            @endif
                            
                        </div>
                    </div>
                    
                    <!--=============-->
                    
                    <!--Permissao-->
                    <div class="form-group row">
                        <div class="form-group">
                            <label class="ml-2 mt-2">Permissão</label>
                            <select name="permissao" class="form-control ml-2">
                                @if(isset($funcionarios) && $funcionarios->id == 1)
                                <option value="Administrador">Administrador</option>
                                @elseif(isset($funcionarios) && $funcionarios->permissao=="Administrador")
                                <option value="Administrador">Administrador</option>
                                <option value="Funcionário">Funcionário</option>
                                <option value="Voluntário">Voluntário</option>
                                @else
                                <option value="Funcionário">Funcionário</option>
                                <option value="Administrador">Administrador</option>
                                <option value="Voluntário">Voluntário</option>
                                @endif
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

@stop

@section('js')
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

{{--
    <script>
        toastr.warning('My name is Inigo Montoya. You killed my father, prepare to die!')
        
        // Display a success toast, with a title
        toastr.success('Have fun storming the castle!', 'Chama no test')
        
        // Display an error toast, with a title
        toastr.error('I do not think that word means what you think it means.', 'Inconceivable!')
    </script> --}}
    
    
    
    @if($errors->any())
    @foreach ($errors->all() as $error)
    <script>
        toastr.error('{{$error}}')
    </script>
    @endforeach
    @endif
    
    <script>
        var password = document.getElementById("password")
        , confirm_password = document.getElementById("confirm_password");
        
        function validatePassword() {
            if (password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Senhas diferentes!");
            } else {
                confirm_password.setCustomValidity('');
            }
        }
        
        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
        
    </script>
    
    @endsection