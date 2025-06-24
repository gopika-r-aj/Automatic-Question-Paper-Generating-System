<script>
function confirmDelete(reg_id) {
swal({
	title: "Are you sure?",
	text: "Once deleted, you will not be able to recover this imaginary file!",
	icon: "warning",
	buttons: true,
	dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
	  
	  
$.ajax({
type: ‘POST’,
url: ‘process.php’,
data: { text1: val1, text2: val2 },
success: function(response) {
$(‘#result’).html(response);
}
});
	  
    swal("Poof! Your imaginary file has been deleted!", 
		 
		 url:'db_function.php?d_teacher=reg_id',
      icon: "success",
		 
		 
		 
		 
    });
  } else {
    swal("Your imaginary file is safe!");
  }
});
}
</script>
		alert(reg_id),
		
swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Poof! Your imaginary file has been deleted!", {
      icon: "success",
		url:<?php #db_function.php?d_teacher= ?>reg_id,
    });
  } else {
    swal("Your imaginary file is safe!");
  }
});