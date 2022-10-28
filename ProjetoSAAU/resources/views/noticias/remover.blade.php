<a href="#" class="btn btn danger" data-toggle="modal" data target="deleteModal" data-id="{{ $email->}}">
    <i class="glyphicon glyphicon-edit" aria-hidden="true"></i>
</a>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
    Launch demo modal
</button>

<!-- Modal -->
<form id="deleteForm" method="get" action=" {{ route('remover.noticias', $removernoticias->id) }}">
    <input type="hidden" name="_method" value="DELETE">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
</form>
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <input type="text" name="email_id" id="email_id" value="">
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-danger">Deletar</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('deleteModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var recipientId = button.data('id');
        console.log(recipientId);
        var modal = $(this);
        modal.find('#email_id').val(recipientId);
    })
</script>