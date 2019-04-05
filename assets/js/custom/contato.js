$(function(){
  $('#contatoForm').submit(function(){
    var contactForm = {
      'Nome': $('#nome').val(),
      'CNPJ': $('#cnpj').val(),
      'Email': $('#email').val(),
      'Telefone': $('#telefone').val(),
      'Mensagem': $('#mensagem').val() 
    }
    url = window.location.origin + '/wp-content/themes/etiqueta/pages/includes/contato_mail.php';
    $.ajax({
      url: url,
      type: 'POST',
      data: contactForm,
      dataType: 'json',
      success: function(data){
        if (data.success == true){
          $('.bg-success').text(data.msg);
          $('.bg-success').css('display', 'block');
          $('.bg-danger').css('display', 'none');
        }

        if (data.success == false){
          $('.bg-danger').text(data.msg);
          $('.bg-danger').css('display', 'block');
          $('.bg-success').css('display', 'none');
        }
      },
      error: function(err){
        console.log('error',err);
      }
    });
  });
});
