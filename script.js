
class UI {
  constructor() {
    //filterStore()
    this.store = document.getElementById('store-items');
    //showCart()
    this.cart = document.getElementById('cart');
    //addToCart() | selectCart()
    this.confirm = document.getElementById('confirmation');
    this.cartInfo = document.getElementById('cart-info');

    this.total = document.querySelector('.cart-total-container');
    this.itemList = [];
    this.itemID = 2;
  }

  showCart() {
    this.cart.classList.toggle('show-cart');
  }
  addToCart(entry) {
    let fullPath = entry.children[0].children[0].src;
    let pos = fullPath.indexOf('img') + 3;
    let partialPath = fullPath.slice(pos);

    const item = {};
    item.id = entry.id;
    item.img = `./img-cart${partialPath}`;
    item.name = entry.children[0].nextElementSibling.children[0].children[0].textContent;
    let price = entry.children[0].nextElementSibling.children[0].children[1].textContent;
    item.price = price.slice(1).trim();

    const cartItem = document.createElement('div');
    cartItem.id = item.id;
    cartItem.classList.add('cart-item', 'd-flex', 'justify-content-between', 'text-capitalize', 'my-3');
    cartItem.innerHTML =
      `
    <img src="${item.img}" class="img-fluid rounded-circle" id="item-img" alt="">
    <div class="item-text">
      <p id="cart-item-title" class="font-weight-bold mb-0">${item.name}</p>
      <span>$</span>
      <span id="cart-item-price" class="cart-item-price" class="mb-0">${item.price}</span>
    </div>
    <a id='cart-item-remove' class="cart-item-remove">
      <i class="fas fa-trash"></i>
    </a>
    `;
    
    this.cart.insertBefore(cartItem, this.total);
    this.confirm.classList.add('show-confirmation');
    setTimeout(() => {
      this.confirm.classList.remove('show-confirmation')
    }, 4000);
    this.cartInfo.classList.add('pink-cart-btn');
    setTimeout(() => {
      this.cartInfo.classList.remove('pink-cart-btn');
    }, 4000);

    showTotals();
  }
  removeFromCart(entry) {
  
    this.cart.removeChild(entry);
    showTotals();
  }
  removeAll() {
    let numItems = this.cart.childElementCount - 2;
    for (let i = 0; i < numItems; i++) {
      setTimeout(() => {
        this.cart.children[i].classList.add('empty-cart');
      }, i * 50)
    }
    setTimeout(() => {
      while (this.cart.childElementCount > 2) {
        this.cart.removeChild(this.cart.children[0]);
      }
      showTotals();
      this.showCart();
    }, numItems * 50);
  }
}

function showTotals() {
  const total = [];
  const items = document.querySelectorAll('.cart-item-price');
  items.forEach((item) => {
    total.push(parseFloat(item.textContent));
  });


  document.getElementById('item-count').textContent = total.length;
}


/* Event Listeners */
function eventListeners() {
  const filterBtn = document.querySelectorAll('.filter-btn');
  const cartItems = document.getElementById('cart');
  const cartInfo = document.getElementById('cart-info');
  const cartBtn = document.querySelectorAll('.store-item-icon');
  const clearAll = document.getElementById('clear-cart');

  const ui = new UI();


  filterBtn.forEach((btn) => {
    btn.addEventListener('click', (event) => {
      ui.filterStore(event.target.dataset.filter);
    });
  });
  /* Clicking on the cart-info button to show/hide the cart */
  cartInfo.addEventListener('click', (event) => {
    if (event.target.classList.contains('cart-info') ||
      event.target.parentElement.classList.contains('cart-info') ||
      event.target.parentElement.parentElement.classList.contains('cart-info')) {
      ui.showCart();
    }
  });
  /* Clicking on the shopping cart to add item to cart */
  cartBtn.forEach((btn) => {
    btn.addEventListener('click', (event) => {
      if (event.target.parentElement.classList.contains('store-item-icon') ||
        event.target.classList.contains('store-item-icon')) {
        ui.addToCart(btn.parentElement.parentElement);
      }
    });
  });
  /* Clicking on the rubbish bin item in the cart to remove item */
  cartItems.addEventListener('click', (event) => {
    ui.removeFromCart(event.target.parentElement.parentElement);
  });
  /* Clicking on the 'clear cart' button at the bottom of the cart */
  clearAll.addEventListener('click', () => {
    ui.removeAll();
  });
}
document.addEventListener("DOMContentLoaded", () => {
  showTotals();
  eventListeners();
});
// Wrap every letter in a span
var textWrapper = document.querySelector('.ml9 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({
        loop: true
    })
    .add({
        targets: '.ml9 .letter',
        scale: [0, 1],
        duration: 1500,
        elasticity: 600,
        delay: (el, i) => 45 * (i + 1)
    }).add({
        targets: '.ml9',
        opacity: 0,
        duration: 1000,
        easing: "easeOutExpo",
        delay: 1000
    });
