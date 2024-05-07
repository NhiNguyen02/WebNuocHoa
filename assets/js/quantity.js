
document.addEventListener('DOMContentLoaded', function() {
    var decrementBtn = document.getElementById('decrement');
    var incrementBtn = document.getElementById('increment');
    var quantityInput = document.getElementById('quantity');

    decrementBtn.addEventListener('click', function() {
        var currentQuantity = parseInt(quantityInput.value);
        if (currentQuantity > 1) {
            quantityInput.value = currentQuantity - 1;
        }
    });

    incrementBtn.addEventListener('click', function() {
        var currentQuantity = parseInt(quantityInput.value);
        quantityInput.value = currentQuantity + 1;
    });
});