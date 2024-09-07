// Toggle navbar visibility on menu button click
let navbar = document.querySelector('.header .header-2 .navbar');
document.querySelector('#menu-btn').onclick = () =>{
   navbar.classList.toggle('active'); // Toggle 'active' class for navbar
   userBox.classList.remove('active'); // Remove 'active' class from user box
}

// Cart functions

// Function to confirm deletion of a single item
function confirmDeleteItem(event) {
   event.preventDefault();
   if (confirm('Delete this from cart?')) {
       const box = event.target.closest('.box');
       box.remove();
       updateGrandTotal(); // Update grand total after deleting item
   }
   return false;
}

// Function to confirm deletion of all items
function confirmDeleteAll() {
   if (confirm('Delete all from cart?')) {
       const boxes = document.querySelectorAll('.box');
       boxes.forEach(box => box.remove());
       updateGrandTotal(); // Update grand total after deleting all items
   }
   return false;
}

// Execute when DOM content is fully loaded
document.addEventListener('DOMContentLoaded', function() {
   // Event listeners for all forms with attribute 'onsubmit="updateCart(event)"'
   document.querySelectorAll('form[onsubmit="updateCart(event)"]').forEach(form => {
       form.addEventListener('submit', function(event) {
           event.preventDefault();
           updateCart(event); // Call updateCart function on form submit
       });
   });

   updateGrandTotal(); // Initial calculation of grand total
});

// Function to update cart item quantity and subtotal
function updateCart(event) {
   const form = event.target;
   const quantity = parseInt(form.cart_quantity.value, 10); // Get quantity input value
   const price = parseFloat(form.closest('.box').querySelector('.price').textContent.replace('$', '')); // Get price from closest box
   const subTotalElement = form.closest('.box').querySelector('.sub-total span'); // Get subtotal element

   if (quantity < 1) {
       form.cart_quantity.value = 1;
       alert('Quantity cannot be less than 1');
       return;
   }

   subTotalElement.textContent = `$${(price * quantity).toFixed(2)}`; // Calculate and set subtotal
   updateGrandTotal(); // Update grand total after changing a cart item
}

// Function to confirm deletion of a single item
function confirmDeleteItem(event) {
   if (!confirm('Are you sure you want to delete this item?')) {
       event.preventDefault();
   }
}

// Function to update grand total based on subtotal of all items
function updateGrandTotal() {
   const subTotals = document.querySelectorAll('.sub-total span');
   let grandTotal = 0;

   subTotals.forEach(subTotalElement => {
       grandTotal += parseFloat(subTotalElement.textContent.replace('$', ''));
   });

   const grandTotalElement = document.querySelector('#grand-total');
   grandTotalElement.textContent = `$${grandTotal.toFixed(2)}`;
}

// Password visibility toggle and form validation

document.addEventListener('DOMContentLoaded', function() {
   const passwordField = document.getElementById('password');
   const confirmPasswordField = document.getElementById('cpassword');
   const togglePassword = document.getElementById('toggle-password');
   const toggleConfirmPassword = document.getElementById('toggle-cpassword');
   const form = document.getElementById('registration-form');

   // Toggle password visibility
   togglePassword.addEventListener('click', function() {
       if (passwordField.type === 'password') {
           passwordField.type = 'text';
           togglePassword.textContent = 'Hide';
       } else {
           passwordField.type = 'password';
           togglePassword.textContent = 'Show';
       }
   });

   // Toggle confirm password visibility
   toggleConfirmPassword.addEventListener('click', function() {
       if (confirmPasswordField.type === 'password') {
           confirmPasswordField.type = 'text';
           toggleConfirmPassword.textContent = 'Hide';
       } else {
           confirmPasswordField.type = 'password';
           toggleConfirmPassword.textContent = 'Show';
       }
   });

   // Form submission validation
   form.addEventListener('submit', function(event) {
       if (passwordField.value !== confirmPasswordField.value) {
           event.preventDefault();
           alert('Passwords do not match');
       }
   });
});


