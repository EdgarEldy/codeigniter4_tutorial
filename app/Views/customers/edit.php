<?= $this->extend('templates/default') ?>
<?= $this->section('content') ?>
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">Update a customer</div>
        <div class="panel-body">
            <div class="col-md-6">
                <form role="form" action="<?= base_url('customers/update') ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $customer['id'] ?>">
                    <div class="form-group">
                        <label>First name</label>
                        <input type="text" name="first_name" class="form-control"
                               placeholder="" value="<?= $customer['first_name']; ?>">
                        <span class="invalid-feedback"></span>
                    </div>
                    <div class="form-group">
                        <label>Last name</label>
                        <input type="text" name="last_name" class="form-control"
                               placeholder="" value="<?= $customer['last_name']; ?>">
                        <span class="invalid-feedback"></span>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control"
                               placeholder="" value="<?= $customer['email']; ?>">
                        <span class="invalid-feedback"></span>
                    </div>
                    <div class="form-group">
                        <label>Tel</label>
                        <input type="text" name="tel" class="form-control"
                               placeholder="" value="<?= $customer['tel']; ?>">
                        <span class="invalid-feedback"></span>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="tel" class="form-control"
                               placeholder="" value="<?= $customer['tel']; ?>">
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
