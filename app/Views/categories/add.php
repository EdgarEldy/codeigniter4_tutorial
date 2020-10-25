<?= $this->extend('templates/default') ?>
<?= $this->section('content') ?>
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">Add a product category</div>
        <div class="panel-body">
            <div class="col-md-6">
                <form role="form" action="<?= base_url('categories/save') ?>" method="post">
                    <div class="form-group">
                        <label>Category name :</label>
                        <input type="text" name="cat_name" class="form-control"
                               placeholder="" value="">
                        <?php if (!empty($errors)): ?>
                        <?php foreach ($errors as $field => $error) : ?>
                        <div class="btn btn-danger">
                        <?= $error; ?>
                        </div>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <button type="submit" id="submit" class="btn btn-primary">Save</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div><!-- /.col-->
<?= $this->endSection() ?>
