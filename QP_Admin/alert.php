function alert($message,$type)
	{
		echo "
			<script>
			swal({
			title: '$message',
			text: 'You clicked the button!',
			icon: '$type',
			timer:1800,
			button: 'OK!',
			});
			</script>";

	}
