<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">Modifier</div>
        <div class="panel-body">
            <div class="col-md-6">
                <form role="form" action="<?= URL_ROOT; ?>/categories/edit/<?= $data['id']; ?>" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label>Product category</label>
                        <input type="text" name="product_name" class="form-control <?= (!empty($data['product_name_err'])) ? 'is_invalid' : '';  ?>"
                               placeholder="" value="<?= $data['product_name']; ?>">
                        <span class="invalid-feedback"><?= $data['product_name_err'] ?></span>
                    </div>
                    <button type="submit" id="submit" class="btn btn-primary">Save</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div><!-- /.col-->