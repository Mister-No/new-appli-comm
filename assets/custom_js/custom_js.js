$(document).ready(function()
{


});


var base_url = 'http://localhost/new-appli-comm/index.php/';

function select_category (item , id) {

  $.get(base_url+'contacts/select_all_cat', function(data) {

    $(item).prop( 'disabled' , false );

    $(item).select2({
      data: data
    });

    $(item).val(id).trigger('change');

  });
}


var base_url = 'http://localhost/new-appli-comm/index.php/';

function select_entreprise (item , id) {

  $.post(base_url+'contacts/select_all_ent', function(data) {

    $(item).prop( 'disabled' , false );
    $(item).select2({
      data: data
    });

    $(item).val(id).trigger('change');

  });

}
