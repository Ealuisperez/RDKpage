<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="Compras.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" 
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="process-steps">
        <div class="process-step active">
            <div class="circle">1</div>
            <p>Carrito</p>
        </div>
        <div class="process-step">
            <div class="circle">2</div>
            <p>Entrega</p>
        </div>
        <div class="process-step">
            <div class="circle">3</div>
            <p>Pago</p>
        </div>
    </div>

    <div class="container">
    <div class="cart-section">
        <h2></h2>
        <br>
        <div id="cartItems"></div>
    </div>
    <div class="summary-section">
        <div class="summary">
            <h3></h3>
            
            
            <div class="summary-details">
                <div class="detail">
                    <span class="detail-label">Productos (n°):</span>
                    <span class="detail-value" id="productCount">0</span>
                </div>
                <div class="detail">
                    <span class="detail-label">Descuento (t%):</span>
                    <span class="detail-value" id="discount">S/0.00</span>
                </div>
                <br>
                <hr>
                <div class="detail">
                    <span class="detail-label">Subtotal:</span>
                    <span class="detail-value" id="subtotal">S/0.00</span>
                </div>
                <div class="detail total">
                    <span class="detail-label">Total:</span>
                    <span class="detail-value" id="totalPrice">S/0.00</span>
                </div>
            </div>
            
        </div>
        <br>
        <div class="button-container">
            <button1 class="pay-btn" style="--clr:orange; --i:0">
                <span>Pagar</span>
            </button1>
        </div>
        <div class="button-container">
            <button1 id="add-button" style="--clr:blue; --i:0">
                <span>Agregar</span>
            </button1>
        </div>
    </div>
</div>

    <div class="delivery-options" style="display: none;">
        <div class="delivery-option">
            <h3 class="retiro">Envío a domicilio</h3>
            <hr class="linea-horizontal">
            <br>
            <form id="deliveryForm" class="form-container">
                <div class="form-group">
                    <label for="direccion" style="color: white;">Dirección:</label>
                    <input type="text" id="direccion" name="direccion" >
                </div>
                <div class="form-group">
                    <label for="fecha" style="color: white;">Fecha:</label>
                    <input type="date" id="fecha" name="fecha" >
                </div>
                <div class="form-group">
                    <label for="hora" style="color: white;">Hora:</label>
                    <input type="time" id="hora" name="hora" >
                </div>
                <div class="form-group">
                    <label for="referencia" style="color: white;">Referencia:</label>
                    <input type="text" id="referencia" name="referencia" ">
                </div>
            </form>
                <p class="inferior-delivery" style="color: white">Precio añadido por envío: S/10.00</p>
                <p class= "total-delivery" style="color: white;">Total con envío: <span id="totalWithDelivery">S/0.00</span></p>
        </div>
        <br>

    <div class="delivery-option">
        <h3 class="retiro">Retiro en tienda</h3>
        <hr class="linea-horizontal">
        <br>
        <form id="pickupForm" class="form-container">
            <div class="form-group">
                <label style="color: white;"><input type="checkbox" name="sede" value="sede1">Av. Los incan 407, San Isidro</label>
            </div>
            <div class="form-group">
                <label style="color: white;"><input type="checkbox" name="sede" value="sede2">Jr. Los Verdes 533, Los Olivos</label>
            </div>
            <div class="form-group">
                <label style="color: white;"><input type="checkbox" name="sede" value="sede3">Calle 120 Mz 702, Independencia</label>
            </div>
            <div class="form-group">
                <label style="color: white;"><input type="checkbox" name="sede" value="sede4">Urb. Manzanas 801, San Borja</label>
            </div>
            <div class="form-group">
                <label for="fechaRecogida" style="color: white;">Fecha:</label>
                <input type="date" id="fechaRecogida" name="fechaRecogida" >
            </div>
            <div class="form-group">
                <label for="horaRecogida" style="color: white;">Hora:</label>
                <input type="time" id="horaRecogida" name="horaRecogida" >
            </div>
        </form>
    </div>
</div>



<div class="payment-section" style="display: none;">
    <div class="payment-options">
        <div class="payment-option">
            <h3><i class="fas fa-file-invoice"></i> Comprobante de Pago</h3>
            <form>
                <label>
                    <input type="radio" name="comprobante" value="factura" required>
                    Factura
                    <i class="fas fa-angle-right expand-icon"></i>
                </label>
                <div class="factura-form" style="display: none;">
                    <!-- Formulario de factura -->
                    <h4>Datos para la factura</h4>
                    <div class="form-group">
                        <label for="nombreFactura">Nombre:</label>
                        <input type="text" id="nombreFactura" name="nombreFactura" required>
                    </div>
                    <div class="form-group">
                        <label for="dniFactura">DNI:</label>
                        <input type="text" id="dniFactura" name="dniFactura" required>
                    </div>
                    <div class="form-group">
                        <label for="direccionFactura">Dirección:</label>
                        <input type="text" id="direccionFactura" name="direccionFactura" required>
                    </div>
                    <div class="cart-summary">
                        <h4>Resumen del carrito</h4>
                        <p>Subtotal: <span id="subtotalFactura">S/0.00</span></p>
                        <p>IGV (18%): <span id="igvFactura">S/0.00</span></p>
                        <p class="total">Total: <span id="totalFactura">S/0.00</span></p>
                    </div>
                    <div class="product-list">
                        <h4>Productos comprados</h4>
                        <ul id="productosFactura"></ul>
                    </div>
                </div>
                <br>
                <label>
                    <input type="radio" name="comprobante" value="boleta">
                    Boleta
                    <i class="fas fa-angle-right expand-icon"></i>
                </label>
                <div class="boleta-form" style="display: none;">
                    <!-- Formulario de boleta -->
                    <h4>Datos para la boleta</h4>
                    <div class="form-group">
                        <label for="nombreBoleta">Nombre:</label>
                        <input type="text" id="nombreBoleta" name="nombreBoleta" required>
                    </div>
                    <div class="cart-summary">
                        <h4>Resumen del carrito</h4>
                        <p>Subtotal: <span id="subtotalBoleta">S/0.00</span></p>
                        <p class="total">Total: <span id="totalBoleta">S/0.00</span></p>
                    </div>
                    <div class="product-list">
                        <h4>Productos comprados</h4>
                        <ul id="productosBoleta"></ul>
                    </div>
                </div>
            </form>
        </div>

        <br>

        <div class="payment-option">
            <h3><i class="fas fa-coins"></i> Crédito</h3>
            <form>
                <label for="creditos">Cantidad de créditos:</label>
                <select id="creditos" name="creditos">
                    <option value="1">1 crédito</option>
                    <option value="2">2 créditos</option>
                    <option value="3">3 créditos</option>
                    <option value="4">4 créditos</option>
                    <option value="5">5 créditos</option>
                    <option value="6">6 créditos</option>
                    <option value="7">7 créditos</option>
                </select>
            </form>
        </div>
    </div>
</div>




<div class="payment-method">
    <label>
        <input type="radio" name="payment-method" value="card">
        <i class="fas fa-credit-card"></i> Pagar con tarjeta
    </label>
    <label>
        <input type="radio" name="payment-method" value="cash">
        <i class="fas fa-money-bill-alt"></i> Contra entrega
    </label>
</div>

    <script>
    document.addEventListener('DOMContentLoaded', () => {
    const cartItemsDiv = document.getElementById('cartItems');
    const totalPriceSpan = document.getElementById('totalPrice');
    const productCountSpan = document.getElementById('productCount');
    const discountSpan = document.getElementById('discount');
    const subtotalSpan = document.getElementById('subtotal');
    const totalWithDeliverySpan = document.getElementById('totalWithDelivery');
    const cartSection = document.querySelector('.cart-section');
    const summarySection = document.querySelector('.summary-section');
    const addButton = document.getElementById('add-button');
    const deliveryOptionsSection = document.querySelector('.delivery-options');
    const paymentMethodSection = document.querySelector('.payment-method');

    // Obtener los formularios de factura y boleta
    const facturaForm = document.querySelector('.factura-form');
    const boletaForm = document.querySelector('.boleta-form');

    // Obtener los iconos de expansión
    const expandIcons = document.querySelectorAll('.expand-icon');

    // Agregar event listeners a los radio buttons
    const comprobantesRadios = document.querySelectorAll('input[name="comprobante"]');
    comprobantesRadios.forEach(radio => {
        radio.addEventListener('change', () => {
            // Ocultar ambos formularios
            facturaForm.style.display = 'none';
            boletaForm.style.display = 'none';

            // Mostrar el formulario correspondiente
            if (radio.value === 'factura') {
                facturaForm.style.display = 'block';
            } else if (radio.value === 'boleta') {
                boletaForm.style.display = 'block';
            }
        });
    });

    // Agregar event listeners a los iconos de expansión
    expandIcons.forEach(icon => {
        icon.addEventListener('click', () => {
            const parentLabel = icon.parentNode;
            const form = parentLabel.nextElementSibling;
            form.style.display = form.style.display === 'none' ? 'block' : 'none';
            icon.style.transform = form.style.display === 'block' ? 'rotate(90deg)' : 'rotate(0deg)';
        });
    });

    // Ocultar la sección payment-method al inicio
    paymentMethodSection.style.display = 'none';

    let cart = JSON.parse(sessionStorage.getItem('cart') || '[]');

    const updateTotal = () => {
        let newTotal = 0;
        let productCount = 0;

        document.querySelectorAll('.cart-item').forEach(cartItem => {
            const priceText = cartItem.querySelector('p').innerText;
            const priceNumber = parseFloat(priceText.replace('S/', '').replace(',', '.'));
            const quantity = cartItem.querySelector('.quantity input').value;
            newTotal += priceNumber * quantity;
            productCount += parseInt(quantity);
        });

        totalPriceSpan.innerText = `S/${newTotal.toFixed(2)}`;
        productCountSpan.innerText = productCount;
        subtotalSpan.innerText = totalPriceSpan.innerText;
        discountSpan.innerText = 'S/0.00';
        totalWithDeliverySpan.innerText = `S/${(newTotal + 10).toFixed(2)}`;
    };

    const renderCart = () => {
        cartItemsDiv.innerHTML = '';
        if (cart.length === 0) {
            cartItemsDiv.innerHTML = '<p>El carrito está vacío.</p>';
            return;
        }

        cart.forEach(item => {
            const itemDiv = document.createElement('div');
            itemDiv.classList.add('cart-item');

                    const checkbox = document.createElement('input');
                    checkbox.type = 'checkbox';
                    checkbox.style.transform = 'scale(1.5)';
                    itemDiv.appendChild(checkbox);

                    const img = document.createElement('img');
                    img.src = item.src;
                    img.alt = item.title;
                    itemDiv.appendChild(img);

                    const title = document.createElement('h3');
                    title.innerText = item.title;
                    itemDiv.appendChild(title);

                    const price = document.createElement('p');
                    price.innerText = item.price;
                    itemDiv.appendChild(price);

                    const quantityDiv = document.createElement('div');
                    quantityDiv.classList.add('quantity');

                    const minusButton = document.createElement('button');
                    minusButton.innerText = '-';
                    minusButton.onclick = () => {
                        const quantityInput = itemDiv.querySelector('.quantity input');
                        if (quantityInput.value > 1) {
                            quantityInput.value = parseInt(quantityInput.value) - 1;
                            updateTotal();
                        }
                    };
                    quantityDiv.appendChild(minusButton);

                    const quantityInput = document.createElement('input');
                    quantityInput.type = 'number';
                    quantityInput.value = 1;
                    quantityDiv.appendChild(quantityInput);

                    const plusButton = document.createElement('button');
                    plusButton.innerText = '+';
                    plusButton.onclick = () => {
                        const quantityInput = itemDiv.querySelector('.quantity input');
                        quantityInput.value = parseInt(quantityInput.value) + 1;
                        updateTotal();
                    };
                    quantityDiv.appendChild(plusButton);

                    itemDiv.appendChild(quantityDiv);

                    const removeButton = document.createElement('button');
                    removeButton.innerText = '🗑️';
                    removeButton.classList.add('remove-btn');
                    removeButton.onclick = () => {
                        Swal.fire({
                            title: "¡LISTO!",
                            text: "Se eliminó el plato del carrito",
                            icon: "success"
                        });

                        itemDiv.remove();
                        cart = cart.filter(cartItem => cartItem.title !== item.title);
                        sessionStorage.setItem('cart', JSON.stringify(cart));
                        updateTotal();
                    };

                    itemDiv.appendChild(removeButton);

                    cartItemsDiv.appendChild(itemDiv);

                    const priceNumber = parseFloat(item.price.replace('S/', '').replace(',', '.'));
                    updateTotal();
                });
            };

            renderCart();

document.getElementById('add-button').onclick = () => {
    const newItem = {
        title: 'Nuevo Producto',
        price: 'S/10.00',
        src: 'https://via.placeholder.com/150'
    };
    cart.push(newItem);
    sessionStorage.setItem('cart', JSON.stringify(cart));
    renderCart();
};

document.querySelector('.pay-btn').onclick = () => {
    const steps = document.querySelectorAll('.process-step');
    const paymentSection = document.querySelector('.payment-section');

    if (steps[1].classList.contains('active')) {
        steps[1].classList.remove('active');
        steps[2].classList.add('active');
        deliveryOptionsSection.style.display = 'none';
        paymentSection.style.display = 'block';
        paymentMethodSection.style.display = 'flex'; // Mostrar el payment-method
    } else {
        steps[0].classList.remove('active');
        steps[1].classList.add('active');
        cartSection.style.display = 'none';
        addButton.style.display = 'none';
        deliveryOptionsSection.style.display = 'flex';
        paymentMethodSection.style.display = 'none'; // Ocultar el payment-method
    }
};

// Código para la animación de iluminación progresiva
const deliveryOption = document.getElementById('deliveryOption');
const pickupOption = document.getElementById('pickupOption');

function illuminateSection(section) {
    section.classList.add('illuminated');
    setTimeout(() => {
        section.classList.remove('illuminated');
    }, 500);
}

deliveryOption.addEventListener('mouseenter', () => illuminateSection(deliveryOption));
pickupOption.addEventListener('mouseenter', () => illuminateSection(pickupOption));
});
</script>
</body>

</html>