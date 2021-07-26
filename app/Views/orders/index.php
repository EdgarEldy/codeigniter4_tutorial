<?= $this->extend('templates/default') ?>
<?= $this->section('content') ?>
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">Orders</div>
        <div class="panel-body">
            <a href="<?= base_url('orders/add') ?>"
               class="btn btn-primary">New</a>
            <table data-toggle="table" data-url=""  data-show-refresh="true" data-show-toggle="true"
                   data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true"
                   data-sort-name="name" data-sort-order="desc">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Fist name</th>
                    <th>Last name</th>
                    <th>Product name</th>
                    <th>Unit price</th>
                    <th>Qty</th>
                    <th>Total</th>
                    <th>Options</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($orders->getResult('array') as $order): ?>
                <tr>
                    <td><?= $order['order_id']; ?></td>
                    <td><?= $order['first_name']; ?></td>
                    <td><?= $order['last_name']; ?></td>
                    <td><?= $order['product_name']; ?></td>
                    <td><?= $order['unit_price']; ?></td>
                    <td><?= $order['qty']; ?></td>
                    <td><?= $order['total']; ?></td>
                    <td>
                        <div class="card-footer">
                            <a href="orders/edit/<?= $order['order_id']; ?>"
                               class="btn btn-primary">Edit</a>
                            <form action="orders/delete/<?= $order['order_id']; ?>" method="post">
                                <button type="submit" onclick="return confirm('Are you sure you want to delete this order ?')" class="btn btn-danger btn-sm">Delete</button>
                            </form>

                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
