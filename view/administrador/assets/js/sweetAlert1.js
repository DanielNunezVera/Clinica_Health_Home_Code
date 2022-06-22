Swal.fire({
    title: 'El usuario ya existe',
    text: "¿Desea actualizar datos?",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Aceptar',
    cancelButtonText:'Cancelar'
  }).then((result) => {
    if (result.isConfirmed) {
        window.location = "../administrador/indexadmin_ge_u_1.php"
    }
  })