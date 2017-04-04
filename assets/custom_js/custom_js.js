$(document).ready(function()
{

  var base_url = 'http://localhost/new-appli-comm/index.php/';

  console.log ($("#select_business").val());

  var str ='id_ent='+$('#select_business').val();

  $.post(base_url+'All_entreprises', str, function(data) {
    console.log (data);
    $('#select_business').prop( 'disabled' , false );

    $('#select_business').select2({
      data: data
    });

  });

  $.post(base_url+'All_categories', str, function(data) {
    console.log (data);
    $('#select_category').prop( 'disabled' , false );

    $('#select_category').select2({
      data: data
    });

  });

});
