/***************************************************************
Ajax
***************************************************************/
$('#form').on('submit', function(e) {
	event.preventDefault();
	form = $(this);
    $.ajax({
      url : 'ajax.php',
      type : 'POST',
      data : form.serialize(),
      success : function(result) {
      }
    });
});