@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

<h1 class="m-0 text-dark">
    Editar a notícia {{$noticia->titulo}}
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

{{-- <script>
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
</div>


@endsection

@section('plugins.Summernote', true)

@section('content')
<div class="row">
    <div class="card card-info col-6">
        <div class="card-header">
            <h3 class="card-title">Editar Notícia</h3>
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('noticias.update', $noticia->id)}}" enctype="multipart/form-data">
                @method('PUT')
                @csrf





                <!-- Titulo -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" title="Titulo">
                            <iconify-icon icon="bx:text"></iconify-icon>
                        </span>
                    </div>
                    <input type="text" name="titulo" class="form-control" value="{{ $noticia->titulo }}" placeholder="Título">
                </div>

                <!-- Resumo  -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" title="Resumo">
                            <iconify-icon icon="carbon:text-align-justify"></iconify-icon>
                        </span>
                    </div>
                    <textarea class="form-control" name="resumo" placeholder="Resumo" rows="2" maxlength="200" style="resize: none;">
                    {{ $noticia->resumo }}
                    </textarea>
                </div>

                <!-- Img -->
                <div class="input-group">
                    <div class="form-group">
                        <label for="img">Selecione a imagem</label>
                        <input type="file" class="form-control-file" id="img" name="foto_noticia">
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


                        <x-adminlte-text-editor name="corpo" label="Corpo da Notícia" igroup-size="sm" placeholder="Digite e edite o corpo da notícia..." :config="$config">
                            {{$noticia->corpo}}
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