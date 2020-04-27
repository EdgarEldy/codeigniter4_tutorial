<?= $this->extend('templates/default') ?>
<?= $this->section('content') ?>
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">Customers</div>
        <div class="panel-body">
            <a href="<?= base_url('customers/add')?>"
               class="btn btn-primary">New</a>
            <table data-toggle="table" data-url=""  data-show-refresh="true" data-show-toggle="true"
                   data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true"
                   data-sort-name="name" data-sort-order="desc">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Email</th>
                    <th>Tel</th>
                    <th>Address</th>
                    <th>Options</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($customers as $customer) :?>
                    <tr>
                        <td><?= $customer['id']; ?> </td>
                        <td><?= $customer['first_name']; ?></td>
                        <td><?= $customer['last_name']; ?></td>
                        <td><?= $customer['email']; ?></td>
                        <td><?= $customer['tel']; ?></td>
                        <td><?= $customer['address']; ?></td>
                        <td>
                            <div class="card-footer">
                                <a href="customers/edit/<?= $customer['id']; ?>"
                                   class="btn btn-primary">Edit</a>
                                <form action="customers/delete/<?= $customer['id']; ?>" method="post">
                                    <button type="submit" onclick="return confirm('Are you sure you want to delete this customer ?')" class="btn btn-danger btn-sm">Delete</button>
                                </form>

                            </div>
                        </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
