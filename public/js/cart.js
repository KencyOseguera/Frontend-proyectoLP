// Función para obtener el contador de localStorage si existe
function obtenerContadorProducto(producto) {
    const contador = localStorage.getItem(`contador${producto}`);
    return contador ? parseInt(contador) : 0;
}

// Inicializar los contadores con los valores de localStorage
let contador1 = obtenerContadorProducto(1);
let contador2 = obtenerContadorProducto(2);
let contador3 = obtenerContadorProducto(3);

// Actualizar el contenido visual de los contadores
document.getElementById("contador1").innerHTML = contador1;
document.getElementById("contador2").innerHTML = contador2;
document.getElementById("contador3").innerHTML = contador3;

// Función para incrementar el contador y actualizar localStorage
function incrementar(producto) {
    if (producto === 1) {
        contador1++;
        localStorage.setItem('contador1', contador1);
        document.getElementById("contador1").innerHTML = contador1;
    } else if (producto === 2) {
        contador2++;
        localStorage.setItem('contador2', contador2);
        document.getElementById("contador2").innerHTML = contador2;
    } else if (producto === 3) {
        contador3++;
        localStorage.setItem('contador3', contador3);
        document.getElementById("contador3").innerHTML = contador3;
    }
}

// Función para decrementar el contador y actualizar localStorage
function decrementar(producto) {
    if (producto === 1 && contador1 > 0) {
        contador1--;
        localStorage.setItem('contador1', contador1);
        document.getElementById("contador1").innerHTML = contador1;
    } else if (producto === 2 && contador2 > 0) {
        contador2--;
        localStorage.setItem('contador2', contador2);
        document.getElementById("contador2").innerHTML = contador2;
    } else if (producto === 3 && contador3 > 0) {
        contador3--;
        localStorage.setItem('contador3', contador3);
        document.getElementById("contador3").innerHTML = contador3;
    }
}

function mostrarDatosCarrito() {
    // Obtener el carrito de localStorage
    const cart = JSON.parse(localStorage.getItem('cart'));

    if (cart && cart.length > 0) {
        console.log("Datos del carrito:");
        cart.forEach((producto, index) => {
            console.log(`Producto ${index + 1}:`, producto);
        });
    } else {
        console.log("El carrito está vacío.");
    }
}




// Función para verificar si el usuario está registrado antes de pagar
