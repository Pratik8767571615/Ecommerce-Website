// Sample shoe data
const shoes = [
  { id: 1, name: 'Running Shoes', price: 50 },
  { id: 2, name: 'Casual Shoes', price: 40 },
  { id: 3, name: 'Formal Shoes', price: 60 },
];

// Initialize cart
let cart = [];

// Function to render shoes
function renderShoes() {
  const shoeList = document.getElementById('shoe-list');
  shoeList.innerHTML = '';
  shoes.forEach(shoe => {
    const shoeItem = document.createElement('div');
    shoeItem.innerHTML = `
      <h3>${shoe.name}</h3>
      <p>$${shoe.price}</p>
      <button onclick="addToCart(${shoe.id})">Add to Cart</button>
    `;
    shoeList.appendChild(shoeItem);
  });
}

// Function to render cart
function renderCart() {
  const cartItems = document.getElementById('cart-items');
  cartItems.innerHTML = '';
  cart.forEach(item => {
    const cartItem = document.createElement('li');
    cartItem.textContent = `${item.name} - $${item.price}`;
    cartItems.appendChild(cartItem);
  });
}

// Function to add item to cart
function addToCart(shoeId) {
  const shoe = shoes.find(item => item.id === shoeId);
  cart.push(shoe);
  renderCart();
}

// Checkout function (not implemented in this basic example)
function checkout() {
  alert('Checkout functionality not implemented in this basic example.');
}

// Initial render
renderShoes();
