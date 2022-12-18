$(document).ready(function () {
  $('.group').hide();
  $('#').show();
  $('#country').change(function () {
    $('.group').hide();
    $('#'+$(this).val()).show();
  })
$("input[placeholder]").each(function () {
        $(this).attr('size', $(this).attr('placeholder').length);
    });
});