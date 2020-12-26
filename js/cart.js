var Cart = {};

Cart.on = function(eventName, callback) {
  if (!Cart.callbacks[eventName]) Cart.callbacks[eventName] = [];
  Cart.callbacks[eventName].push(callback);
  return Cart;
};

Cart.trigger = function(eventName, args) {
  if (Cart.callbacks[eventName]) {
    for (var i = 0; i<Cart.callbacks[eventName].length; i++) {
      Cart.callbacks[eventName][i](args||{});
    }
  }
  return Cart;
};

Cart.save = function() {
  localStorage.setItem('cart-items', JSON.stringify(Cart.items));
  Cart.trigger('saved');
  return Cart;
};

Cart.empty =  function() {
  Cart.items = [];
  Cart.trigger('emptied');
  Cart.save();
  return Cart;
};

Cart.indexOfItem = function(id) {
  for (var i = 0; i<Cart.items.length; i++) {
    if (Cart.items[i].id===id) return i;
  }
  return null;
};

Cart.removeEmptyLines = function() {
  newItems = [];
  for (var i = 0; i<Cart.items.length; i++) {
    if (Cart.items[i].quantity>0) newItems.push(Cart.items[i]);
  }
  Cart.items = newItems;
  return Cart;
};

Cart.addItem = function(item) {
  if (!item.quantity) item.quantity = 1;
  var index = Cart.indexOfItem(item.id);
  if (index===null) {
    Cart.items.push(item);
  } else {
    Cart.items[index]. quantity += item.quantity;
  }
  Cart.removeEmptyLines();
  if (item.quantity > 0) {
    Cart.trigger('added', {item: item});
  } else {
    Cart.trigger('removed', {item: item});
  }
  Cart.save();
  return Cart;
};

Cart.itemsCount = function() {
  var accumulator = 0;
  for (var i = 0; i<Cart.items.length; i++) {
    accumulator += Cart.items[i].quantity;
  }
  return accumulator;
};

Cart.currency = ' тг';

Cart.displayPrice = function(price) {
  if (price===0) return 'Free';
  var floatPrice = price;
  var decimals = floatPrice==parseInt(floatPrice, 10) ? 0 : 2;
  return floatPrice.toFixed(decimals) + Cart.currency;
};

Cart.linePrice = function(index) {
  return Cart.items[index].price * Cart.items[index].quantity;
};

Cart.subTotal = function() {
  var accumulator = 0;
  for (var i = 0; i<Cart.items.length; i++) {
    accumulator += Cart.linePrice(i);
  }
  return accumulator;
};

Cart.init = function() {
  var items = localStorage.getItem('cart-items');
  if (items) {
    Cart.items = JSON.parse(items);
  } else {
    Cart.items = [];
  }
  Cart.callbacks = {};
  return Cart;
}

Cart.initJQuery = function() {

  Cart.init();

  Cart.templateCompiler = function(a,b){return function(c,d){return a.replace(/#{([^}]*)}/g,function(a,e){return Function("x","with(x)return "+e).call(c,d||b||{})})}};

  Cart.lineItemTemplate = "<tr class='new_cart_cont'>" +
    "<td><img class='' src='#{this.image}' alt='#{this.label}' /></td>" +
    // "<td></td>" +
    "<td>#{this.label}</td>" +
    "<tr class='cart_center'><td class='cart_event'><button type='button' class='button cart-add' data-id='#{this.id}' data-quantity='-1'>-</button><div class='cart_number'>#{this.quantity}</div><button type='button' class='button cart-add' data-id='#{this.id}' data-quantity='1'>+</button></td>" +
    "<td><button type='button' class='button cart-add' data-id='#{this.id}' data-quantity='{this.quantity}'>&times;</button></td>" +
    "<td>#{Cart.displayPrice(this.price)}</td></tr>" +
  "</tr>";

  $(document).on('click', '.cart-add', function(e) {
    e.preventDefault();
    var button = $(this);
    var item = {
      id: button.data('id'),
      price: button.data('price'),
      quantity: button.data('quantity'),
      label: button.data('label'),
      image: button.data('image')
    }
    Cart.addItem(item);
  });

  var updateReport = function() {
    var count = Cart.itemsCount();
    $('.cart-items-count').text(count);
    $('.cart-subtotal').html(Cart.displayPrice(Cart.subTotal()));
    if (count===1) {
      $('.cart-items-count-singular').show();
      $('.cart-items-count-plural').hide();
    } else {
      $('.cart-items-count-singular').hide();
      $('.cart-items-count-plural').show();
    }
  };

  var updateCart = function() {
    if (Cart.items.length>0) {
      var template = Cart.templateCompiler(Cart.lineItemTemplate);
      var lineItems = "";
      for (var i = 0; i<Cart.items.length; i++) {
        lineItems += template(Cart.items[i]);
      }
      $('.cart-line-items').html(lineItems);
      $('.cart-table').show();
      $('.cart-is-empty').hide();
    } else {
      $('.cart-table').hide();
      $('.cart-is-empty').show();
    }
  };

  var update = function() {
    updateReport();
    updateCart();
  };
  update();

  Cart.on('saved', update);

  return Cart;
};
