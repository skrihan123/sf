		</div>
		<!-- /#wrapper --> 
		<?php
		$db->close();
		$_SESSION['msg'] = '0';
		?>
		<!-- jQuery --> 
		<!--<script src="bower_components/jquery/dist/jquery.min.js"></script> -->
		<script src="components/metisMenu.min.js"></script> 
		<!-- DataTables JavaScript --> 
		<script src="components/jquery.dataTables.min.js"></script> 
		<script src="components/dataTables.bootstrap.min.js"></script> 
		<script src="components/dataTables.responsive.js"></script> 
		<!-- Custom Theme JavaScript --> 
		<script src="dist/js/sb-admin-2.js"></script> 
		<!-- Page-Level Demo Scripts - Tables - Use for reference --> 
		<script>
		$(document).ready(function () {
			$('#dataTables-example').DataTable({
				responsive: true,
				"columnDefs": [{
					"targets": 'no-sort',
					"orderable": false,
				}]
			});
		});
		</script>
		<script>
		// tooltip demo
		$('.tooltip-demo').tooltip({
			selector: "[data-toggle=tooltip]",
			container: "body"
		})
		// popover demo
		$("[data-toggle=popover]")
			.popover()
		</script>
		<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script> 
		<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
		<?php ob_end_flush(); ?>
	</body>
</html>