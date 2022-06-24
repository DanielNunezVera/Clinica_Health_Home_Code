
Swal.fire({
    title: 'El usuario no existe',
    text: "¿Desea crearlo?",
    icon: 'info',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Aceptar',
    cancelButtonText:'Cancelar'
  }).then((result) => {
    if (result.isConfirmed) {
        window.location = "../../../controller/administrador/ge_u.php"
    }
  })

