$(document).ready(function() {
    loadcart();

    function loadcart() {
        $.ajax({
            method: "GET",
            url: "/cart-count",
            dataType: "json",
            success: function(response) {
                $('.cart-count').html(response.count);
            }
        });
    }
});