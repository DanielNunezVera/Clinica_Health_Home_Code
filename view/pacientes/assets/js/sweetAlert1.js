Swal.fire({
    title: 'Agendar cita',
    text: "Confirmar cita",
    icon: 'question',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Agendar',
    cancelButtonText:'Cancelar'
  }).then((result) => {
    if (result.isConfirmed) {
        window.location = "index_pac.php"
    }
  })