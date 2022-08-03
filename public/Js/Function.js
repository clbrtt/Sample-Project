$('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('whatever') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-title').text('New message to ' + recipient)
    modal.find('.modal-body input').val(recipient)
  });

  /*$(document).ready(function () {
    $('#tbl-sample').DataTable();
});*/

$('#search-1').on('input', function(){

  var search1 = $('#search-1').val();
  $.ajax({
    url: '/search/' + search1,
    type: 'get',
   dataType: 'json',
   success: function(response){
         $('#tbl-sample').empty();
         console.log(response);
         $.each(response, function(key, value){
          
          $('#tbl-sample').append('<tr><td>'+value.prod_name+'</td></tr>');
       });
      
   }
  });
});

