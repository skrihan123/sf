<?php
if (empty($_SESSION['e_msg'])) {
	$e_msg = '';
	$e_value = '';
} else {
	$e_msg = $_SESSION['e_msg'];
	$e_value = $_SESSION['e_value'];
	?>
	<div class="col-md-8 col-md-offset-2">
		<style>
		#shopweb {
			position: absolute;
			z-index: 33;
			width: 100%;
			border-radius: 5px;
			border: 0;
			margin-top: 5px;
			text-align: center;
		}
		.alert {
			padding:5px 10px;
			font-size: 12px;
		}
		.alert-success {
			color: #fff;
			background-color: #4CB844;
			border-color: #468847;
		}
		.alert-warning {
			color: #fff;
			background-color: #FB7E02;
			border-color: #DF7C00;
		}
		.alert-danger,
		.alert-error {
			color: #fff;
			background-color: #DC494C;
			border-color: #b94a48;
		}
		</style>
		<div class="alert alert-<?php echo $e_value; ?>" role="alert" id="shopweb">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<?php echo $e_msg; ?>
		</div>
	</div>
	<?php
	unset($_SESSION['e_msg']);
	unset($_SESSION['e_value']);
}
?>
<script>
$(document).ready(function () {
	$('div#shopweb').delay(7200).slideUp();
});
</script>