<!DOCTYPE html>
<html>
<?= $this->include('inc/head') ?>

<body>
	<?= $this->include('inc/nav') ?>
	<?= $this->include('inc/sidebar') ?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

		<div class="row">
			<?= $this->renderSection('content') ?>
		</div>
		<!--/.row-->
	</div>
	<!--/.main-->

	<script src="<?= base_url('js/jquery-3.4.1.min.js') ?>"></script>
	<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
	<script src="<?= base_url('js/bootstrap-datepicker.js') ?>"></script>
	<script src="<?= base_url('js/bootstrap-table.js') ?>"></script>
	<script src="<?= base_url('js/fontawesome.min.js') ?>"></script>

	<!-- main.js -->
	<script src="<?= base_url('js/main.js') ?>"></script>
	<!-- End of main.js -->
	<script>
		! function($) {
			$(document).on("click", "ul.nav li.parent > a > span.icon", function() {
				$(this).find('em:first').toggleClass("glyphicon-minus");
			});
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function() {
			if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function() {
			if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>
	<script>
		$('#calendar').datepicker({});

		! function($) {
			$(document).on("click", "ul.nav li.parent > a > span.icon", function() {
				$(this).find('em:first').toggleClass("glyphicon-minus");
			});
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function() {
			if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function() {
			if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>

</body>
</html>