<?= $this->extend('templates/default') ?>
<?= $this->section('content') ?>
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading"><a href="<?= base_url('orders') ?>">Orders</a> / Update an order</div>
        <div class="panel-body">
            <div class="col-md-6">
                <form role="form" action="<?= base_url('orders/update') ?>" method="POST">
                    <input type="hidden" name="id" value="<?= $order['id'] ?>">
                    <div class="form-group">
                        <label for="customer">Customer :</label>
                        <select name="customer_id" id="" class="form-control">
                            <option value="<?= $customer['customer_id'] ?>"><?= $customer['first_name'] . ' ' . $customer['last_name'] ?></option>
                            <option value="" class="bolden">
                                <h1>Select a customer...</h1>
                            </option>
                            <?php foreach ($customers as $customer) : ?>
                                <option value="<?= $customer['id'] ?>"><?= $customer['first_name'] . ' ' . $customer['last_name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="category">Category :</label>
                        <select name="category_id" id="cat_id" class="form-control">
                            <option value="<?= $category['category_id'] ?>"><?= $category['category_name'] ?></option>
                            <option value="" class="bolden">
                                <h1>Select a category...</h1>
                            </option>
                            <?php foreach ($categories as $category) : ?>
                                <option value="<?= $category['id'] ?>"><?= $category['category_name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="product_name">Product :</label>
                        <select name="product_id" id="product_id" class="form-control">
                            <option value="<?= $product['id'] ?>"><?= $product['product_name'] ?></option>
                            <option value="" class="bolden">
                                <h1>Select a product...</h1>
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Unit price :</label>
                        <input type="text" name="unit_price" id="unit_price" class="form-control" placeholder="" value="<?= $product['unit_price'] ?>">
                        <span class="invalid-feedback"></span>
                    </div>
                    <div class="form-group">
                        <label>Quantity :</label>
                        <input type="text" name="qty" id="qty" class="form-control" placeholder="" value="<?= $order['qty'] ?>">
                        <span class="invalid-feedback"></span>
                    </div>
                    <div class="form-group">
                        <label>Total :</label>
                        <input type="text" name="total" id="total" class="form-control" placeholder="" value="<?= $order['total'] ?>">
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