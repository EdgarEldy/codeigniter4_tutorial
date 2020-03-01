<?= $this->extend('templates/default') ?>
<?= $this->section('content') ?>
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">Home</h1>
  </div>
</div><!--/.row-->
<div class="col-xs-12 col-md-6 col-lg-3">
<a href="<?= base_url('orders');?>">
<div class="panel panel-orange panel-widget">
  <div class="row no-padding">
    <div class="col-sm-3 col-lg-5 widget-left">
      <svg class="glyph table"><use xlink:href="#stroked-table"></use></svg>
    </div>
    <div class="col-sm-9 col-lg-7 widget-right">
      <div class="text-muted">Orders</div>
    </div>
  </div>
</div>
  </a>
</div>
<script type="text/javascript">
</script>
<div class="col-xs-12 col-md-6 col-lg-3">
<a href="<?= base_url('customers');?>">
<div class="panel panel-teal panel-widget">
  <div class="row no-padding">
    <div class="col-sm-3 col-lg-5 widget-left">
      <svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg>
    </div>
    <div class="col-sm-9 col-lg-7 widget-right">
      <div class="text-muted">Customers</div>
    </div>
  </div>
</div>
</a>
</div>
<div class="col-xs-12 col-md-6 col-lg-3">
<a href="<?= base_url('products');?>">
<div class="panel panel-blue panel-widget ">
  <div class="row no-padding">
    <div class="col-sm-3 col-lg-5 widget-left">
      <svg class="glyph stroked clock"><use xlink:href="#stroked-clock"></use></svg>
    </div>
    <div class="col-sm-9 col-lg-7 widget-right">
      <div class="text-muted">products</div>
    </div>
  </div>
</div>
</a>
</div>
<div class="col-xs-12 col-md-6 col-lg-3">
<a href="<?= base_url('users/profile') ;?>/">
  <div class="panel panel-red panel-widget">
  <div class="row no-padding">
    <div class="col-sm-3 col-lg-5 widget-left">
      <svg class="glyph stroked male user"><use xlink:href="#stroked-male-user"></use></svg>
    </div>
    <div class="col-sm-9 col-lg-7 widget-right">
      <div class="text-muted">Profile</div>
    </div>
  </div>
</div>
</a>
</div>
<?= $this->endSection() ?>
