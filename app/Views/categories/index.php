<?= $this->extend('templates/default') ?>
<?= $this->section('content') ?>
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">Product categories</div>
        <div class="panel-body">
            <?php if (session()->getFlashdata('category_saved')) : ?>
                <?php echo '<p class="alert alert-success w-100 h-100">' . session()->getFlashdata('category_saved') . '</p>'; ?>
            <?php endif; ?>
            <a href="<?= base_url('categories/add') ?>" class="btn btn-primary">New</a>
            <table data-toggle="table" data-url="" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Category name</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($categories as $category) : ?>
                        <tr>
                            <td><?= $category['id']; ?> </td>
                            <td><?= $category['category_name']; ?></td>
                            <td>
                                <div class="card-footer">
                                    <a href="categories/edit/<?= $category['id']; ?>" class="btn btn-primary">Edit</a>
                                    <form action="categories/delete/<?= $category['id']; ?>" method="post">
                                        <button type="submit" onclick="return confirm('Are you sure you want to delete this category ?')" class="btn btn-danger btn-sm">Delete</button>
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