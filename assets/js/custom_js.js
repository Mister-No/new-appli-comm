$(document).ready(function()
{
    $("#select_civility").select2({
        placeholder: 'Choisir la civilité...',
        allowClear: true
    }).on('select2-open', function()
    {
        $(this).data('select2').results.addClass('overflow-hidden').perfectScrollbar();
    });

    $("#select_business").select2({
        placeholder: 'Choisir une entreprises...',
        allowClear: true
    }).on('select2-open', function()
    {
        $(this).data('select2').results.addClass('overflow-hidden').perfectScrollbar();
    });

    $("#select_category").select2({
        placeholder: 'Choisir une catégorie...',
        allowClear: true
    }).on('select2-open', function()
    {
        $(this).data('select2').results.addClass('overflow-hidden').perfectScrollbar();
    });

});
