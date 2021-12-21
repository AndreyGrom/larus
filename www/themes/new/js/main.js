function add_cart(product_id, len_id, raz_id, ser_id, lin_id, cnt, modal) {
    $.ajax({
        url: '/shop/',
        method: 'post',
        dataType: 'html',
        data: {
            add_cart: 'add_cart',
            product_id : product_id,
            len_id: len_id,
            raz_id: raz_id,
            ser_id: ser_id,
            lin_id: lin_id,
            cnt: cnt,
        },
        success: function(data){
            if (modal !== null){
                modal.modal('show');
            }
        }
    });
}