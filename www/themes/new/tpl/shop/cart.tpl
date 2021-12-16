{include file="../common/header.tpl"}


<div class="container cart-content">
    <div class="row">
        <div class="col-sm-6 cart-form">
            <h2 class="cart-title">Купить кабель</h2>
            <form id="form-cart" method="post">
                <select id="ser">
                    <option value="0">Выбрать серию</option>
                    {section name=i loop=$categories}
                        <option value="{$categories[i].ID}">{$categories[i].TITLE}</option>
                    {/section}
                </select>
                <select id="lin">
                    <option value="0">Выбрать линейку</option>
                </select>
                <select id="type">
                    <option value="0">Выбрать тип кабеля</option>
                </select>
                <select id="len">
                    <option value="0">Длина</option>
                </select>
                <select id="raz">
                    <option value="0">Дополнительный разъем</option>
                </select>
            </form>
        </div>
    </div>
</div>
<script>
    {literal}
    function QuerySelect(act, id, res){
        $.ajax({
            url: '/shop/',
            method: 'post',
            dataType: 'html',
            data: {act: act, id : id},
            success: function(data){
                res.html(data);
            }
        });
    }
    $("#form-cart #ser").change(function () {
        $("#lin").html('<option value="0">Загрузка...</option>')
        QuerySelect('GetLin', $(this).val(), $("#lin"));
    });
    $("#form-cart #lin").change(function () {
        $("#type").html('<option value="0">Загрузка...</option>')
        QuerySelect('GetType', $(this).val(), $("#type"));
    });
    $("#form-cart #len").change(function () {
        $("#len").html('<option value="0">Загрузка...</option>')
        QuerySelect('GetType', $(this).val(), $("#len"));
    });
    {/literal}
</script>
{include file="../common/footer.tpl"}