let add_to_cart = function () {
  // add product to cart from main landing page
  $('.add-cart').on('click', function (e) {
    e.preventDefault();

    let _this = $(this),
      prodID = _this.data('product-id');

    cart_ajax_action('add', prodID);

  });

  function cart_ajax_action(action, prodID) {
    let jsonData = {
      action: action,
      productID: prodID
    };

    $.ajax({
      url: url + '/ajaxController/addToCart',
      type: 'post',
      data: jsonData,
      dataType: 'json',
      success: function (data, status, xhr) {
        console.log(data);
      },
      error: function (xhr, status, error) {
        console.log(error);
      }
    });
  }
};

export {add_to_cart};
