<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-12-14 16:24:08
         compiled from "D:\data\domains\provoda\www\system\controllers\shop\tpl\item-price.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205677285361b89af8108439-87017174%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8306a352d94bea639c355d58a64d36e5b549865' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\system\\controllers\\shop\\tpl\\item-price.tpl',
      1 => 1626992979,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205677285361b89af8108439-87017174',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item_price' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_61b89af811fb30_61628016',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61b89af811fb30_61628016')) {function content_61b89af811fb30_61628016($_smarty_tpl) {?><div class="form-horizontal" role="form">
    <div class="form-group">
        <label class="col-sm-3 control-label">Базовая цена:</label>
        <div class="col-sm-9">
            <input  id="price" value="<?php echo $_smarty_tpl->tpl_vars['item_price']->value;?>
" name="price" type="text" class="form-control">
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
                <?php if ($_smarty_tpl->tpl_vars['item']->value['LEN']) {?>
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['item']->value['LEN']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['LEN'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['LEN'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['LEN'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PRICE'];?>
</td>
                            <td><a href="?c=shop&act=remove-len&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
&r-id=<?php echo $_smarty_tpl->tpl_vars['item']->value['LEN'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ID'];?>
"><span class="glyphicon glyphicon-remove"></span></a></td>
                        </tr>
                    <?php endfor; endif; ?>
                <?php }?>
            </tbody>
        </table>
    </div>
</div>
<textarea id="text-j" name="text-j" style="display: none;"><?php echo $_smarty_tpl->tpl_vars['item']->value['LEN_STR'];?>
</textarea>


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
            <?php if ($_smarty_tpl->tpl_vars['item']->value['RAZ']) {?>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['item']->value['RAZ']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['RAZ'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['SNAME'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['RAZ'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['SCAPT'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['RAZ'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PRICE'];?>
</td>
                        <td><a href="?c=shop&act=remove-raz&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
&r-id=<?php echo $_smarty_tpl->tpl_vars['item']->value['RAZ'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ID'];?>
"><span class="glyphicon glyphicon-remove"></span></a></td>
                    </tr>
                <?php endfor; endif; ?>
            <?php }?>
            </tbody>
        </table>
    </div>
</div>
<textarea id="text-j-2" name="text-j-2" style="display: none;"><?php echo $_smarty_tpl->tpl_vars['item']->value['LEN_STR'];?>
</textarea>


<?php echo '<script'; ?>
>

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
<?php echo '</script'; ?>
><?php }} ?>
