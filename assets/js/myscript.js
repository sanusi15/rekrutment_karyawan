$(document).ready(function(){
  $().ready(function() {

    const message = $('.message').data('flashdata');
    const pesan = $('.pesan').data('pesan');
    if(message){
      Swal.fire({        
        icon: 'success',
        title: message,
        text: 'Lanjut ke soal',
        showConfirmButton: true,
        timer: 6000
      })
    }

    if(pesan){
      Swal.fire({        
        icon: 'success',
        title: pesan,
        text: 'Informasi akan dikirim ke Email anda',
        showConfirmButton: true,
        timer: 6000
      })
    }

  });

});