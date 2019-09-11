<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

<script type="text/javascript">

    $('#editModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipientId = button.data('id')
    var recipientName = button.data('name') // Extract info from data-* attributes
    var recipientDescricao = button.data('descricao') 
    var recipientTipo = button.data('tipo') 
    var recipientdPag = button.data('dpag') 
    var recipientValor = button.data('valor') 
    var recipientDate = button.data('date') 
    var recipientParcelas = button.data('parcelas') 
    var recipientAtraso = button.data('atraso') 
    
    var modal = $(this)
    modal.find('#nome').val(recipientName)
    modal.find('#descri').val(recipientDescricao)
    modal.find('#tipoConta').val(recipientTipo)
    modal.find('#diaPag').val(recipientdPag)
    modal.find('#valor').val(recipientValor)
    modal.find('#venci').val(recipientDate)
    modal.find('#parcelas').val(recipientParcelas)
    
    $("#excluir").click(function(){
        alert(recipientId)
    });
    
    });

    
</script>

</body>
</html>
