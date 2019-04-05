$(function(){
  $('#newsletterFormulario').submit(function(){
    var newsletterForm = {
      'Email': $('#email').val()
    }
    url = window.location.origin + '/wp-content/themes/etiqueta/pages/includes/newsletter.php';
    $.ajax({
      url: url,
      type: 'POST',
      data: newsletterForm,
      dataType: 'json',
      success: function(data){
        console.log(data['msg']);
        $('.msg').text(data['msg']);
      },
      error: function(err){
        console.log(err);
      }
    });
  });
});
