<!DOCTYPE html>
<html>
<?= $this->include('inc/head') ?>
<body>
  <?= $this->include('inc/nav') ?>
  <?= $this->include('inc/sidebar') ?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

		<div class="row">
    <?= $this->renderSection('content') ?>
		</div><!--/.row-->
	</div>	<!--/.main-->

<?= $this->include('inc/scripts') ?>

</body>

</html>
