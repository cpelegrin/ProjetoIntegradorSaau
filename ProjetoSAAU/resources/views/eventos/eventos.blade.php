@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

<h1 class="m-0 text-dark">
    Eventos - Cadastro
</h1>

@stop

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/5/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
@endsection

@section('plugins.Summernote', true)

@section('content')
<div class="row">
    <div class="card card-info col-12">
        <div class="card-header">
            <h3 class="card-title">Cadastro de Eventos</h3>
        </div>
        <div class="card-body">
            <form method="post" action="@if(isset($evento)) {{route('eventos.update', $evento->id)}} @else {{ Route('salvar_evento')}} @endif" enctype="multipart/form-data">
                @if(isset($evento))
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
                    <input type="text" name="titulo" class="form-control" value="{{ $evento->titulo ?? old('titulo')}}" placeholder="Título">
                </div>

                <!-- Descricao  -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" title="Resumo">
                            <iconify-icon icon="carbon:text-align-justify"></iconify-icon>
                        </span>
                    </div>
                    <textarea class="form-control" name="descricao" placeholder="Descrição" rows="2" maxlength="200" style="resize: none;">{{$evento->descricao ?? old('descricao')}}</textarea>
                </div>

                <!-- Local -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" title="Local">
                            <iconify-icon icon="carbon:text-align-justify"></iconify-icon>
                        </span>
                    </div>
                    <textarea class="form-control" name="local" placeholder="Local" rows="2" maxlength="200" style="resize: none;">{{$evento->local ?? old('local')}}</textarea>
                </div>


                <!-- data  -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" title="Data">
                            <iconify-icon icon="carbon:text-align-justify"></iconify-icon>
                        </span>
                    </div>
                    <input type="text" name="data" value="{{ $evento->data ?? old('data')}}" placeholder="data">
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
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<script>
    toastr.options.preventDuplicates = true;
</script>

<script type="text/javascript">
    $(function() {
        $('input[name="data"]').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            timePicker: true,
            timePicker24Hour: true,
            timePickerIncrement: 30,
            locale: {
                format: 'DD/MM/YYYY HH:mm ',
                lang: 'pt-BR',
                separator: " - ",
                applyLabel: "Aplicar",
                cancelLabel: "Cancelar",
                monthNames: [
                    "Janeiro",
                    "Fevereiro",
                    "Março",
                    "Abril",
                    "Maio",
                    "Junho",
                    "Julho",
                    "Agosto",
                    "Setembro",
                    "Outubro",
                    "Novembro",
                    "Dezembro"
                ],
                daysOfWeek: [
                    "Dom",
                    "Seg",
                    "Ter",
                    "Qua",
                    "Qui",
                    "Sex",
                    "Sáb"
                ],
                firstDay: 0
            }
        });
    });
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