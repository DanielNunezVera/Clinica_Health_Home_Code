function agenda() {
  Swal.fire({
    title: 'Agenda no existente',
    text: "¿Desea crearla?",
    icon: 'info',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Aceptar',
    cancelButtonText:'Cancelar'
  }).then((result) => {
    if (result.isConfirmed) {
        window.location = "../gestion_agenda/new_agenda.php"
    }
  })
}


