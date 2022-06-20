// ==========================================================
//              Increase and Decrease Button
// ==========================================================
function increaseCount(a, b) {
  const input = b.previousElementSibling;
  let value = parseInt(input.value, 10);
  value = isNaN(value) ? 0 : value;
  value++;
  input.value = value;
  UpdateTotal;
}
function DecreaseCount(a, b) {
  const input = b.nextElementSibling;
  let value = parseInt(input.value, 10);
  if (value) {
    value = isNaN(value) ? 0 : value;
    value--;
    input.value = value;
  }
}
// ==========================================================

// ===================================================================
//                          Order Summary
// ===================================================================
// ~~~~~~~~~~~~~~~
// Reference
// ~~~~~~~~~~~~~~~~
// var taxRate = 0.125,
//   shippingRate = 65,
//   discountRate = 0.15,
//   currencySign = '$';

// function recalculateCart() {
//   var t = 0;
//   document.getElementsByClassName('product').forEach(function (e) {
//     e.getElementsByClassName('product-line-price').forEach(function (e) {
//       t += parseFloat(e.innerHTML);
//     });
//   });

//   var e = t * taxRate,
//     n = t * discountRate,
//     c = 0 < t ? shippingRate : 0,
//     r = t + e + c - n;

//   (document.getElementById('cart-subtotal').innerHTML = currencySign + t.toFixed(2)),
//     (document.getElementById('cart-tax').innerHTML = currencySign + e.toFixed(2)),
//     (document.getElementById('cart-shipping').innerHTML = currencySign + c.toFixed(2)),
//     (document.getElementById('cart-total').innerHTML = currencySign + r.toFixed(2)),
//     (document.getElementById('cart-discount').innerHTML = '-' + currencySign + n.toFixed(2));
// }

// function updateQuantity(e) {
//   var t,
//     n,
//     c = e.closest('.product');
//   (c || c.getElementsByClassName('product-price')) &&
//     c.getElementsByClassName('product-price').forEach(function (e) {
//       t = parseFloat(e.innerHTML);
//     }),
//     e.previousElementSibling && e.previousElementSibling.classList.contains('product-quantity')
//       ? (n = e.previousElementSibling.value)
//       : e.nextElementSibling && e.nextElementSibling.classList.contains('product-quantity') && (n = e.nextElementSibling.value);
//   var r = t * n;
//   c.getElementsByClassName('product-line-price').forEach(function (e) {
//     (e.innerHTML = r.toFixed(2)), recalculateCart();
//   });
// }

// var removeProduct = document.getElementById('removeItemModal');
// removeProduct &&
//   removeProduct.addEventListener('show.bs.modal', function (t) {
//     document.getElementById('remove-product').addEventListener('click', function (e) {
//       t.relatedTarget.closest('.product').remove(), document.getElementById('close-modal').click(), recalculateCart();
//     });
//   });
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

function updateQuantity(e) {
  var t,
    n,
    c = e.closest('.cart-produk');
  (c || c.getElementsByClassName('harga')) &&
    c.getElementsByClassName('harga').forEach((e) => {
      t = parseInt(e.innerHTML);
    }),
    e.previousElementSibling && e.previousElementSibling.classList.contains('quantity')
      ? (n = e.previousElementSibling.value)
      : e.nextElementSibling && e.nextElementSibling.classList.contains('quantity') && (n = e.nextElementSibling.value);
  var r = t * n;
  c.getElementsByClassName('total').forEach((e) => {
    (e.innerHTML = r.toFixed(2)), recalculateCart();
  });
}
var removeProduk = document.getElementById('removeModal');
removeProduk &&
  removeProduk.addEventListener('show.bs.modal', (t) => {
    document.getElementById('remove-produk').addEventListener('click', (e) => {
      t.relatedTarget.closest('.cart-produk').remove(), document.getElementById('close-modal').click();
    });
  });
// ===============================================================
