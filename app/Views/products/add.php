<?= $this->extend('templates/default') ?>
<?= $this->section('content') ?>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"><a href="<?= base_url('products') ?>">Products</a> / Add a product</div>
            <div class="panel-body">
                <div class="col-md-6">
                    <form role="form" action="<?= base_url('products/save') ?>" method="POST">
                    <div class="form-group">
                        <label for="">Category :</label>
                        <select name="category_id" id="" class="form-control">
                            <option value="">Select</option>
                            <?php foreach ($categories as $category): ?>
                            <option value="<?= $category['id'] ?>"><?= $category['category_name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                        <div class="form-group">
                            <label>Product name :</label>
                            <input type="text" name="product_name" class="form-control"
                                   placeholder="" value="">
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="form-group">
                            <label>Unit price :</label>
                            <input type="text" name="unit_price" class="form-control"
                                   placeholder="" value="">
                            <span class="invalid-feedback"></span>
                        </div>
                    <button type="submit" id="submit" class="btn btn-primary">Save</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- /.col-->

<?= $this->endSection() ?>
								