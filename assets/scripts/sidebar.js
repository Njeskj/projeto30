// Adiciona a classe 'fixed-top' à navbar quando o usuário rola para cima
$(window).scroll(function() {
    if ($(document).scrollTop() > 50) {
      $('#sidebar').addClass('fixed-top');
    } else {
      $('#sidebar').removeClass('fixed-top');
    }
  });