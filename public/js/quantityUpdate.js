document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('input-quantity').addEventListener('input', function() {
        const inputValue = this.value;
        updateContent(inputValue);
    });
});

function updateContent(inputValue) {
    var price = document.getElementById('product-price').value;
    var errorMsg = document.getElementById('error-message');

    if (price == 0 || price == '') {
        document.getElementById('content-price').innerHTML = '₱' + price;
    } else {
        if(inputValue > 100) {
            errorMsg.innerHTML = "Value must be less than or equal to 100.";
            errorMsg.classList.remove('hidden');
        } else if(inputValue == 0) {
            errorMsg.innerHTML = "Value must be greater or equal to 1.";
            errorMsg.classList.remove('hidden');
            document.getElementById('content-price').innerHTML = '₱' + 0;
        } else {
            var updated_price = price * inputValue;
            errorMsg.classList.add('hidden');
            document.getElementById('content-price').innerHTML = '₱' + updated_price;
        }
    }
}