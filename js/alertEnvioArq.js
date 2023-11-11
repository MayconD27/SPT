
window.addEventListener('load', function() {
    Swal.fire({
        title: 'O envio foi bem sucedido',
        text: "Selecione um novo arquivo para enviar!",
        icon: 'success',
        confirmButtonText: 'Continuar enviando',
        showCloseButton: true
    }).then((result) => {
      if (result.isConfirmed) {
          // Redirecionar para o link desejado
          window.location.href = '../admin_tela/envioLote.php';
      }
  });

  });