@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

<h1 class="m-0 text-dark">
    Animais - Cadastro
</h1>

@stop

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endsection

@section('plugins.Summernote', true)

@section('content')
<div class="row">
    <div class="card card-info col-6">
        <div class="card-header">
            <h3 class="card-title">Cadastro de Animais</h3>
        </div>
        <div class="card-body">
            <form method="post" action="@if(isset($lista)) {{route('animal.update', $lista->name)}} @else {{ Route('salvar_animal')}} @endif" enctype="multipart/form-data">
                @if(isset($lista))
                @method('PUT')
                @endif
                @csrf
                <!-- Nome  -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" title="Nome">
                            <iconify-icon icon="ph:dog-light"></iconify-icon>
                        </span>
                    </div>
                    <input type="text" name="nome" class="form-control" value="{{ $lista->name ?? old('nome')}}" placeholder="Nome">
                </div>
                
                <!-- Sexo  -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" title="Sexo">
                            <iconify-icon icon="healthicons:sexual-reproductive-health"></iconify-icon>
                        </span>
                    </div>
                    <input type="text" name="sexo" class="form-control" value="{{ $lista->sexo ?? old('sexo')}}" placeholder="Sexo">
                </div>

                <!-- Img -->
                <div class="input-group row">
                    <div class="form-group">
                        <label for="img">Selecione a imagem</label>
                        <input type="file" class="form-control-file btn bg-gradient-dark btn-sm float-end mt-6 mb-0" id="foto_animal" name="foto_noticia" accept=".png, .jpg, .jpeg">
                    </div>
                    <div>
                        <img id="preview-image" class="ml-5" width="150px" src="">
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


                        <x-adminlte-text-editor name="características do animal" label="Características do Animal" igroup-size="lg" placeholder="Insira algumas caraterísticas do animal..." :config="$config">
                            {{ $lista->caracteristicas ?? old('caracteristicas') }}
                        </x-adminlte-text-editor>


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
    $('#foto_noticia').on('change', function() {
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