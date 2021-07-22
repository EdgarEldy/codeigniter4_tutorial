//Get products by category id using ajax
$(function () {
  $("#cat_id").on("change", function () {
    var cat_id = $(this).val();
    $.get("/orders/getProducts", { cat_id: cat_id }, function (data) {
      $("#product_id").html(data);
    });
  });
});
