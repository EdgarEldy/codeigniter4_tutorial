<?= $this->extend('templates/default') ?>
<?= $this->section('content') ?>
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">Update a category</div>
        <div class="panel-body">
            <div class="col-md-6">
                <form role="form" action="<?= base_url('categories/update') ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $category['id'] ?>">
                    <div class="form-group">
                        <label>Product category</label>
                        <input type="text" name="category_name" class="form-control"
                               placeholder="" value="<?= $category['category_name']; ?>">
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
