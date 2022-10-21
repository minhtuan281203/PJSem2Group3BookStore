(function ($){
    /* ----------------
     Product Filter - Menu
     ----------------- */
    $('.filter-control').on('click', 'item', function (){
        const $item = $(this)

        $item.siblings().removeClass('active');
        $item.addClass('active');
    })

    /*-------------------
		Quantity change
	--------------------- */
    var proQty = $('.pro-qty');
    proQty.prepend('<span class="dec qtybtn"></span>');
    proQty.append('<span class="inc qtybtn"></span>');
    proQty.on('click', '.qtybtn', function () {
        var $button = $(this);
        var oldValue = $button.parent().find('input').val();
        if ($button.hasClass('inc')) {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        $button.parent().find('input').val(newVal);

        //update cart
        const rowId = $button.parent().find('input').data('rowid');
        updateCart(rowId, newVal);
    });

    function updateCart(rowId, qty) {
        $.ajax({
           type: "GET",
           url: "cart/update",
           data: {rowId: rowId, qty: qty},
           success: function (response) {
               console.log(response);
               location.reload();
           },
           error: function (error) {
               alert('Update failed!');
               console.log(error);
           },
        });
    }

    /*-------------------
        ...
     ----------------------*/

})(jQuery);
