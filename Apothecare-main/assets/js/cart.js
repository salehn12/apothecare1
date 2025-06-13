document.addEventListener('DOMContentLoaded', function() {
    console.log('Document loaded, initializing cart');
    initCart();
});

function initCart() {
    const cartItemsContainer = document.querySelector('.cart-items');
    
    if (!cartItemsContainer) {
        console.error('Cart container not found');
        return;
    }

    // Initialize all cart items
    document.querySelectorAll('.winkel-item').forEach(item => {
        initCartItem(item);
    });

    // Event listeners
    cartItemsContainer.addEventListener('click', handleCartClick);
    cartItemsContainer.addEventListener('change', handleQuantityChange);

    updateCartSummary();
}

function initCartItem(item) {
    const priceElement = item.querySelector('.item-price .price-amount');
    const quantityInput = item.querySelector('.quantity-input');
    
    if (!priceElement || !quantityInput) {
        console.error('Missing elements in cart item', item);
        return;
    }

    // Store base price in dataset
    const basePrice = parseFloat(priceElement.textContent);
    item.dataset.basePrice = basePrice;
    
    // Initialize quantity
    quantityInput.value = quantityInput.value || 1;
    
    // Calculate initial total
    updateItemPrice(item);
}

function handleCartClick(e) {
    const item = e.target.closest('.winkel-item');
    if (!item) return;

    const input = item.querySelector('.quantity-input');
    if (!input) return;

    if (e.target.closest('.plus-btn')) {
        input.value = parseInt(input.value) + 1;
        updateItemPrice(item);
    } else if (e.target.closest('.minus-btn')) {
        const newValue = parseInt(input.value) - 1;
        input.value = newValue > 0 ? newValue : 1;
        updateItemPrice(item);
    } else if (e.target.closest('.remove-btn')) {
        removeCartItem(item);
    }
}

function handleQuantityChange(e) {
    if (e.target.classList.contains('quantity-input')) {
        const input = e.target;
        const value = parseInt(input.value);
        
        input.value = value > 0 ? value : 1;
        updateItemPrice(input.closest('.winkel-item'));
    }
}

function updateItemPrice(item) {
    const quantityInput = item.querySelector('.quantity-input');
    const priceDisplay = item.querySelector('.item-price .price-amount');

    if (!quantityInput || !priceDisplay || !item.dataset.basePrice) {
        console.error('Missing data for price update', item);
        return;
    }

    const basePrice = parseFloat(item.dataset.basePrice);
    const quantity = parseInt(quantityInput.value);
    const totalPrice = basePrice * quantity;

    priceDisplay.textContent = totalPrice.toFixed(2);
    updateCartSummary();
}

function removeCartItem(item) {
    item.style.transition = 'opacity 0.3s, transform 0.3s';
    item.style.opacity = '0';
    item.style.transform = 'translateX(-100%)';
    
    setTimeout(() => {
        item.remove();
        updateCartSummary();
        checkEmptyCart();
    }, 300);
}

function updateCartSummary() {
    const items = document.querySelectorAll('.winkel-item');
    let subtotal = 0;

    items.forEach(item => {
        const priceElement = item.querySelector('.item-price .price-amount');
        if (priceElement) {
            subtotal += parseFloat(priceElement.textContent);
        }
    });

    const tax = subtotal * 0.1; // 10% tax
    const total = subtotal + tax;

    document.querySelector('.subtotal').textContent = `€${subtotal.toFixed(2)}`;
    document.querySelector('.tax').textContent = `€${tax.toFixed(2)}`;
    document.querySelector('.total-price').textContent = `€${total.toFixed(2)}`;
}

function checkEmptyCart() {
    const cartItemsContainer = document.querySelector('.cart-items');
    const orderSummary = document.querySelector('.order-summary');

    if (!cartItemsContainer || !orderSummary) return;

    if (document.querySelectorAll('.winkel-item').length === 0) {
        cartItemsContainer.innerHTML = `
            <div class="empty-message">
                <p>Je winkelwagen is leeg</p>
                <a href="producten.php" class="continue-shopping">Verder winkelen</a>
            </div>`;
        orderSummary.style.display = 'none';
    } else {
        orderSummary.style.display = 'block';
    }
}

// Mobile menu toggle function
function toggleMobileMenu() {
    const mobileMenu = document.getElementById('mobileMenu');
    mobileMenu.classList.toggle('active');
}