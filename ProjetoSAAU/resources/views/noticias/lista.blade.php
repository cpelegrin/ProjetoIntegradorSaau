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


<div class="row ">
    <div class="col-10 ">
        <div class=" ">
            <div class="card-body">
                <div class="col-md-10">
                    <div class="card">
                        <!--Titulo da tabela-->
                        <div class="card-header card-header-icon" data-background-color="rose">
                            <i class="material-icons">
                                <h4>Lista das notícias cadastradas </h4>
                            </i>
                        </div>
                        <!--===============-->
                        <div class="card-content pl-2">
                            <div class="table-responsive">
                                <table class="table">
                                    <!--Cabecalho da tabel-->
                                    <thead>
                                        <tr>
                                            <th>Título</th>
                                            <th>Resumo</th>
                                            <th>Ùltima atualização</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!--===============-->

                                        <!--Corpo da tabela-->
                                        @foreach ($lista as $noticia)
                                        <tr>
                                            <td>{{$noticia->titulo}}</td>
                                            <td>{{$noticia->resumo}}</td>
                                            <td>{{$noticia->update_at}}</td>
                                            <td class="td-actions text-right">



                                                <a href="{{route('noticias.edit', $noticia->id) }} ">Editar</a>


                                                <a href="#" class="mx-2" data-toggle="modal" data-target="#deletarnoticia" id="delete-button" data-noticiaid="{{$noticia->id}}">
                                                    <i class="fas fa-trash-alt text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        <!--===============-->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- Modal -->
<form id="deleteForm" method="post" action="{{route('remover.noticias', $noticia)}}">
    @csrf
    @method('put')
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="modal fade" id="deletarnoticia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmação</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-center">Confirma a exclusão do registro?</p>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger"> Deletar</button>
                </div>
            </div>
        </div>
    </div>
</form>


@stop

@section('js')
<script>
    $('#delete-button').on('click', function() {
        var noticiaid = this.dataset['noticiaid'];
        console.log(noticiaid);
        var gambi = $('#deleteForm').attr('action');
        var s = gambi.substr(45);
        console.log(s)
        var final = gambi.replace(s, noticiaid)
        console.log(final);
        $('#deleteForm').attr('action', final);
    });
</script>

@endsection