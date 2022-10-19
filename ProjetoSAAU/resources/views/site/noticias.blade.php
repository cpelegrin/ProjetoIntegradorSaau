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

<script>
    toastr.warning('My name is Inigo Montoya. You killed my father, prepare to die!')

    // Display a success toast, with a title
    toastr.success('Have fun storming the castle!', 'Miracle Max Says')

    // Display an error toast, with a title
    toastr.error('I do not think that word means what you think it means.', 'Inconceivable!')
</script>


@endsection

@section('plugins.Summernote', true)

@section('content')
<div class="row">
    <div class="card card-info col-6">
        <div class="card-header">
            <h3 class="card-title">Cadastro de Notícias</h3>
        </div>
        <div class="card-body">
            <form method="post" action="{{Route('salvar')}}" enctype="multipart/form-data">
                @csrf
                <!-- Titulo  -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" title="Titulo">
                            <iconify-icon icon="arcticons:news"></iconify-icon>
                        </span>
                    </div>
                    <input type="text" name="titulo" class="form-control" placeholder="Título">
                </div>

                <!-- Resumo  -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" title="Resumo">
                            <iconify-icon icon="arcticons:news"></iconify-icon>
                        </span>
                    </div>
                    <textarea class="form-control" name="resumo" placeholder="Resumo" rows="2"></textarea>
                </div>

                <!-- Img -->
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-file-upload"></i>
                        </span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="foto_noticia" id="img" />
                        <label class="custom-file-label" for="img">Selecione a imagem</label>
                    </div>
                </div>

                <!-- Corpo  -->
                <div class="input-group mt-4">
                    <div class="input-group-prepend">
                        <!-- teste do summernote -->
                        @php
                        $config = [
                        'height' => '100',
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


                        <x-adminlte-text-editor name="corpo" label="Corpo da Notícia" igroup-size="sm" placeholder="Digite e edite o corpo da notícia..." :config="$config" />

                    </div>
                </div>

                <div class="mt-2">
                    <input type="submit" value="Enviar" class="btn btn-info" />
                </div>

            </form>

        </div>

    </div>

</div>
</div>
</div>
@endsection