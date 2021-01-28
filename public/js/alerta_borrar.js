$('.borrar_registro').submit(function(e){
    e.preventDefault();
    Swal.fire({
        title: 'Esta seguro de eliminar este registro?',
        text: "No se podrá recuperar esta información",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, Borrar',
        cancelButtonText: 'Cancelar'
      }).then((result) => {
        if (result.isConfirmed) {
          /*Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success')
            */
           this.submit();

        }
      })
})

/**/


