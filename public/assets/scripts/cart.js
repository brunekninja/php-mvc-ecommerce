let cart = function () {

  // add product to pages from main landing page
  $('.cart-action').on('click', function (e) {
    e.preventDefault();

    let _this = $(this),
      prodID = _this.data('product-id'),
      action = _this.data('action');

    cart_ajax_action(action, prodID);

  });

  function cart_ajax_action(action, prodID) {
    let jsonData = {
      action: action,
      productID: prodID
    };

    $.ajax({
      url: url + 'cartCtrl/addToCart',
      type: 'post',
      data: jsonData,
      success: function (data, status, xhr) {
        if (action === 'remove') {
          $('.items-num').text(data);
        } else {

        }
      },
      error: function (xhr, status, error) {
        console.log(error);
      }
    });
  }

};

export {cart};
