jQuery(document).on('click' , '.delete-anchor' , function(e){
	e.preventDefault();
	swal.fire({
            title: `Do you really want to do this?`,
           
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Confirm!'
        }).then((result) => {
              if (result.value) {
  

            Swal.fire(
                  'Deleted',

                  'danger'
            )
            $("#delete-form").attr('action' , jQuery(this).attr('href'));
            $("#delete-form").submit();
        }
      })
});

jQuery(document).on('click' , '.block-anchor' , function(e){
	e.preventDefault();
	swal.fire({
            title: `Do you really want to do this?`,
           
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Confirm!'
        }).then((result) => {
              if (result.value) {
  

            Swal.fire(
                  'Blocked',

                  'danger'
            )
            jQuery("#block-form").attr('action' , jQuery(this).attr('href'));
            jQuery("#block-form").submit();
        }
      })
});