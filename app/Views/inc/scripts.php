<script src="<?= base_url('js/jquery-1.11.1.min.js'); ?>"></script>
<script src="<?= base_url('js/jquery-3.4.1.min.js'); ?>"></script>
	<script src="<?= base_url('js/bootstrap.min.js'); ?>"></script>
	<script src="<?= base_url('js/chart.min.js'); ?>"></script>
	<script src="<?= base_url('js/chart-data.js'); ?>"></script>
	<script src="<?= base_url('js/easypiechart.js'); ?>"></script>
	<script src="<?= base_url('js/easypiechart-data.js'); ?>"></script>
	<script src="<?= base_url('js/bootstrap-datepicker.js'); ?>"></script>
	<script src="<?= base_url('js/bootstrap-table.js'); ?>"></script>
	<script src="<?= base_url('js/global.js'); ?>"></script>
	<script src="<?= base_url('js/fontawesome.min.js'); ?>"></script>
	<script src="<?= base_url('js/events.js'); ?>"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){
				$(this).find('em:first').toggleClass("glyphicon-minus");
			});
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){
		        $(this).find('em:first').toggleClass("glyphicon-minus");
		    });
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>
