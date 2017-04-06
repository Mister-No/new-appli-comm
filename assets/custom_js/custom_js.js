$(document).ready(function()
{


});

function select (item , id, urlSelect) {

	var base_url = 'http://localhost/new-appli-comm/common/' + urlSelect;

  $.post(base_url, function(data) {

    $(item).prop( 'disabled' , false );

    $(item).select2({
      data: data
    });

    $(item).val(id).trigger('change');

  });
}
