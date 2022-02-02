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
            } else {
                document.location.href = "/shop/cart";
            }
        }
    });
}
function getUrlVar(){
    var urlVar = window.location.search; // получаем параметры из урла
    var arrayVar = []; // массив для хранения переменных
    var valueAndKey = []; // массив для временного хранения значения и имени переменной
    var resultArray = []; // массив для хранения переменных
    arrayVar = (urlVar.substr(1)).split('&'); // разбираем урл на параметры
    if(arrayVar[0]=="") return false; // если нет переменных в урле
    for (i = 0; i < arrayVar.length; i ++) { // перебираем все переменные из урла
        valueAndKey = arrayVar[i].split('='); // пишем в массив имя переменной и ее значение
        resultArray[valueAndKey[0]] = valueAndKey[1]; // пишем в итоговый массив имя переменной и ее значение
    }
    return resultArray; // возвращаем результат
}
var url_var = getUrlVar();
var img_loader = $('<img src="/system/design/img/load.gif">');
$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();

    $(".confirm").click(function(e){
        if ( !confirm("Вы уверены, что хотите это сделать?")){
            e.preventDefault();
        }
    });

    $(".fancybox").fancybox();

});

