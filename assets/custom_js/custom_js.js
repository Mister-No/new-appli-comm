$(document).ready(function()
{

	$(function() {
	  $('#form-login').submit(function() {
	  username = $(this).find('input[name=username]').val();
	  passwrd = $(this).find('input[name=passwrd]').val();

	  $.post('http://localhost/new-appli-comm/login/verifier.html', {username: username, passwd: passwrd}, function(data) {
	    if (data=1) {
				//console.log('connexion ok');
	      window.location.href = 'dashboard.html';
	    } else {

				console.log('connexion KO');
	      //$('.erreur').empty().html('Nous n\'avons pas pu vous identifier. Merci.');
	    }
	  });
	  return false;
	  });
	});

	$('.check_all').click(function() {
			$(this).parent().parent().parent().parent().parent().find(':checkbox').prop('checked', this.checked);
	});



});

function select (item, id, urlSelect) {

	var base_url = 'http://localhost/new-appli-comm/common/' + urlSelect;

  $.post(base_url, function(data) {

    $(item).prop( 'disabled' , false );

    $(item).select2({
      data: data
    });

    $(item).val(id).trigger('change');

  });
}


function delete_item (id, titre)
{
	$(".modal").find ("#id").val(id);
	$(".modal-body").empty().append (titre);
	$('#modal-delete').modal('show', {backdrop: 'fade'});
}
