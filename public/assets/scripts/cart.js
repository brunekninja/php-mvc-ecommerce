let cart = function () {

  // add product to pages from main landing page
  $('.cart-action').on('click', function (e) {
    e.preventDefault();

    let _this = $(this),
      prodID = _this.data('product-id'),
      action = _this.data('action');

    cart_ajax_action(action, prodID, _this);

  });

  function cart_ajax_action(action, prodID, elem) {
    let jsonData = {
      action: action,
      productID: prodID
    };

    let items = $('.items-num');

    $.ajax({
      url: url + 'cartCtrl/addToCart',
      type: 'post',
      data: jsonData,
      success: function (data) {
        switch (action)
        {
          case 'remove':
            elem.closest('.portfolio-item').detach();
            items.text(data);
            break;
          case 'clean':
            $('.portfolio-item').detach();
            items.text(data);
            break;
          default:
            items.text(data);
        }
      },
      error: function (xhr, status, error) {
        console.log(error);
      }
    });
  }

};

export {cart};
