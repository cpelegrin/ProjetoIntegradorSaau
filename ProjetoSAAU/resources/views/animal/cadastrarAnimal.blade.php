@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

<h1 class="m-0 text-dark">
    Animais - Cadastro
</h1>

@stop

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('plugins.Summernote', true)

@section('content')
<div class="row">
    <div class="card card-info col-12">
        <div class="card-header">
            <h3 class="card-title">Cadastro de Animais</h3>
        </div>
        <div class="card-body">
            <form method="post" action="@if(isset($animal)) {{route('atualizar_animal', $animal->id)}} @else {{ Route('salvar_animal')}} @endif" enctype="multipart/form-data">
                @isset($animal)
                @method('PUT')
                @endisset
                @csrf
                <!-- Nome  -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" title="Nome">
                            <iconify-icon icon="ph:dog-light"></iconify-icon>
                        </span>
                    </div>
                    <input type="text" name="nome" class="form-control" value="{{ $animal->nome ?? old('nome')}}" placeholder="Nome">
                </div>

                <!-- Status  -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <select class="form-select" aria-label="Selecione o status" name="status">
                            <option @if(isset($animal)) {{$animal->status == '' ? 'selected' : ''}}@endif>Status do animal</option>
                            <option value="recemchegado" @if(isset($animal)) {{$animal->status == 'recemchegado' ? 'selected' : ''}}@endif>Recém-chegado</option>
                            <option value="disponivel" @if(isset($animal)) {{$animal->status == 'disponivel' ? 'selected' : ''}}@endif>Disponível para adoção</option>
                            <option value="adotado" @if(isset($animal)) {{$animal->status == 'adotado' ? 'selected' : ''}}@endif>Adotado</option>
                            <option value="tratamento" @if(isset($animal)) {{$animal->status == 'tratamento' ? 'selected' : ''}}@endif>Em tratamento</option>
                            <option value="falecido" @if(isset($animal)) {{$animal->status == 'falecido' ? 'selected' : ''}}@endif>Falecido</option>
                        </select>
                    </div>
                </div>

                <!-- Sexo  -->
                <div class="input-group mb-3">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sexo" id="inlineRadio2" value="Macho" @if(isset($animal)) {{$animal->sexo == 'Macho' ? 'checked' : ''}}@endif>
                        <label class=" form-check-label" for="inlineRadio1">Macho</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sexo" id="inlineRadio2" value="Femea" @if(isset($animal)) {{$animal->sexo == 'Femea' ? 'checked' : ''}}@endif>
                        <label class="form-check-label" for="inlineRadio2">Femea</label>
                    </div>
                </div>

                <!-- Img -->
                <div class="input-group row">
                    <label for="img">Selecione a imagem</label>
                    <input type="file" class="form-control-file btn bg-info btn-sm float-end mt-6 mb-0" id="foto_animal" name="foto_animal" accept=".png, .jpg, .jpeg">
                    <div class="mx-4">
                        <label id="label-preview" style="text-align: center; display: block" hidden>Foto selecionada</label>
                        <img id="preview-image" width="150px" src="">
                    </div>
                </div>

                <!-- Detalhes  -->
                <div class="input-group mt-4">
                    <div class="input-group-prepend">
                        <!-- teste do summernote -->
                        @php
                        $config = [
                        'height' => '250',
                        'width' => '772',
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


                        <x-adminlte-text-editor name="prontuario" label="Prontuário do Animal" igroup-size="sm" placeholder="Insira algumas caraterísticas do animal..." :config="$config">
                            {{ $animal->prontuario ?? old('prontuario') }}
                        </x-adminlte-text-editor>
                        <div class="m-5">
                            @isset($animal->image)
                            <label style="text-align: center; display: block">Foto Atual</label>
                            <img src="{{ url('storage/'. $animal->image) }}" alt="{{$animal->nome}}" width="250px">
                            @endisset
                        </div>

                    </div>
                </div>

                <div class="mt-2">
                    <input type="submit" value="Enviar" class="btn btn-info" />
                </div>



            </form>

        </div>

    </div>
</div>
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.1/dist/iconify-icon.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
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


<script>
    $('#foto_animal').on('change', function() {
        if (this.files && this.files[0]) {
            var file = new FileReader();
            file.onload = function(e) {
                document.getElementById("preview-image").src = e.target.result;
            };
            file.readAsDataURL(this.files[0]);
        }
    });
</script>
@endsection