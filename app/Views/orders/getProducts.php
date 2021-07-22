<!-- Get products from ajax -->
<option value="">Select a product...</option>
<?php foreach ($products->getResult('array') as $product) : ?>
    <option value="<?= $product['id'] ?>"><?= $product['product_name'] ?></option>
<?php endforeach ?>