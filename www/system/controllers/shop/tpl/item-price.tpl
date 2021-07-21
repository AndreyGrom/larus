<div class="form-horizontal" role="form">
    <div class="form-group">
        <label class="col-sm-3 control-label">Базовая цена:</label>
        <div class="col-sm-9">
            <input  id="price" value="{$item_price}" name="price" type="text" class="form-control">
            <p class="help-block">Цена, от которой оталкиваются остальные.</p>
        </div>
    </div>
</div>


<hr/>
<h4>Длина</h4>
<div class="row">
    <div class="col-sm-3">
            <p>Длина</p>
        <input id="input-length" type="number" class="form-control" step="any"/>
    </div>
    <div class="col-sm-3">
        <p>Цена</p>
        <input id="input-price" type="number" class="form-control" step="any"/>
    </div>
    <div class="col-sm-3">
        <p>&nbsp;</p>
        <button type="button" class="btn btn-primary" id="add-to-length">Добавить</button>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <table class="table" id="t-length">
            <thead>
                <tr>
                    <td>Длина</td>
                    <td>Цена</td>
                </tr>
            </thead>
            <tbody>
                {if $item.LEN}
                    {section name=i loop=$item.LEN}
                        <tr>
                            <td>{$item.LEN[i].LEN}</td>
                            <td>{$item.LEN[i].PRICE}</td>
                            <td><a href="?c=shop&act=remove-len&id={$item.ID}&r-id={$item.LEN[i].ID}"><span class="glyphicon glyphicon-remove"></span></a></td>
                        </tr>
                    {/section}
                {/if}
            </tbody>
        </table>
    </div>
</div>
<textarea id="text-j" name="text-j" style="display: none;">{$item.LEN_STR}</textarea>


<hr/>
<h4>Разъемы</h4>
<div class="row">
    <div class="col-sm-3">
        <p>Название</p>
        <input id="input-name" type="text" class="form-control"/>
    </div>
    <div class="col-sm-3">
        <p>Бонус</p>
        <input id="input-bonus" type="text" class="form-control">
    </div>
    <div class="col-sm-3">
        <p>Плюс к цене</p>
        <input id="input-price-p" type="number" class="form-control" step="any"/>
    </div>
    <div class="col-sm-3">
        <p>&nbsp;</p>
        <button type="button" class="btn btn-primary" id="add-to-raz">Добавить</button>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <table class="table" id="t-raz">
            <thead>
            <tr>
                <td>Название</td>
                <td>Бонус</td>
                <td>Плюс к цене</td>
                <td></td>
            </tr>
            </thead>
            <tbody>
            {if $item.RAZ}
                {section name=i loop=$item.RAZ}
                    <tr>
                        <td>{$item.RAZ[i].SNAME}</td>
                        <td>{$item.RAZ[i].SCAPT}</td>
                        <td>{$item.RAZ[i].PRICE}</td>
                        <td><a href="?c=shop&act=remove-raz&id={$item.ID}&r-id={$item.RAZ[i].ID}"><span class="glyphicon glyphicon-remove"></span></a></td>
                    </tr>
                {/section}
            {/if}
            </tbody>
        </table>
    </div>
</div>
<textarea id="text-j-2" name="text-j-2" style="display: none;">{$item.LEN_STR}</textarea>


<script>

    $("#add-to-length").click(function(){

        var tr = "<tr><td>" + $("#input-length").val() + "</td><td>" + $("#input-price").val() + "</td></tr>";
        $("#t-length tbody").append(tr);

        ScanTbl();
    });

    $("#add-to-raz").click(function(){
        var tr = "<tr><td>" + $("#input-name").val() + "</td><td>" + $("#input-bonus").val() + "</td><<td>" + $("#input-price-p").val() + "</td></tr>";
        $("#t-raz tbody").append(tr);
        ScanTbl();

    });

    function ScanTbl(){

        var array = [];
        $('#t-length tbody tr').each(function(){
            var array_row = [];
            $(this).find('td').each(function(){
                array_row.push($(this).text());
            });
            array.push(array_row);
        });
        $('#text-j').text(JSON.stringify(array));

        var array = [];
        $('#t-raz tbody tr').each(function(){
            var array_row = [];
            $(this).find('td').each(function(){
                array_row.push($(this).text());
            });
            array.push(array_row);
        });
        $('#text-j-2').text(JSON.stringify(array));
        SetPfice();
    }

    function SetPfice(){
        var len =  Number(("#input-length"),val());
        var name =  Number($("#input-name"),val());
        var number = Number$(("#prodhct-price"),val());
        var price = (len + name) * number;
        $("#input-length"),val(price);
    }

    ScanTbl();
</script>