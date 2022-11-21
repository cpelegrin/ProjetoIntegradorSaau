@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

<h1 class="m-0 text-dark">
    Notícias - Cadastro
</h1>

@stop

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endsection

@section('plugins.Summernote', true)

@section('content')
<div class="row">
    <div class="card card-info col-12">
        <div class="card-header">
            <h3 class="card-title">Cadastro de Notícias</h3>
        </div>
        <div class="card-body">
            <form method="post" action="@if(isset($noticia)) {{route('noticias.update', $noticia->id)}} @else {{ Route('salvar_noticia')}} @endif" enctype="multipart/form-data">
                @if(isset($noticia))
                @method('PUT')
                @endif
                @csrf
                <!-- Titulo  -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" title="Titulo">
                            <iconify-icon icon="bx:text"></iconify-icon>
                        </span>
                    </div>
                    <input type="text" name="titulo" class="form-control" value="{{ $noticia->titulo ?? old('titulo')}}" placeholder="Título">
                </div>

                <!-- Resumo  -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" title="Resumo">
                            <iconify-icon icon="carbon:text-align-justify"></iconify-icon>
                        </span>
                    </div>
                    <textarea class="form-control" name="resumo" placeholder="Resumo" rows="2" maxlength="200" style="resize: none;"> {{ $noticia->resumo ?? old('resumo')}} </textarea>
                </div>

                <!-- Img -->
                <div class="input-group row">
                    <div class="form-group">
                        <label for="img">Selecione a imagem</label>
                        <input type="file" class="form-control-file btn bg-gradient-dark btn-sm float-end mt-6 mb-0" id="foto_noticia" name="foto_noticia" accept=".png, .jpg, .jpeg">
                    </div>
                    <div class="mx-4">
                        <label id="label-preview" style="text-align: center; display: block" hidden>Foto selecionada</label>
                        <img id="preview-image" width="150px" src="">
                    </div>
                </div>

                <!-- Corpo  -->
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

                        <div class="row">
                            <x-adminlte-text-editor name="corpo" label="Corpo da Notícia" igroup-size="sm" placeholder="Digite e edite o corpo da notícia..." :config="$config">
                                {{ $noticia->corpo ?? old('corpo') }}
                            </x-adminlte-text-editor>

                            <div class="m-5">
                                @isset($noticia->image)
                                <label style="text-align: center; display: block">Foto Atual</label>
                                <img src="{{ url('storage/'. $noticia->image) }}" alt="{{$noticia->titulo}}" width="250px">
                                @endisset
                            </div>
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
            document.getElementById("label-preview").hidden = false;

        }
    });
</script>
@endsection