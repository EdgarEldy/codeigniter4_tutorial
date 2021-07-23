//Get products by category id using ajax
$(function () {
  $("#cat_id").on("change", function () {
    var cat_id = $(this).val();
    $.get("/orders/getProducts", { cat_id: cat_id }, function (data) {
      $("#product_id").html(data);
    });
  });
});

//Get unit price by product id ajax
$(function () {
    $("#product_id").on("change", function () {
        var product_id = $(this).val();
        // alert(product_id);
        $.get("/orders/getUnitPrice", { product_id: product_id }, function (data) {
                $("#unit_price").val(data);
            });
    });
});