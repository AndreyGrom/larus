<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-10-18 13:48:13
         compiled from "D:\data\domains\provoda\www\system\controllers\blog\tpl\item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:903860843616d50ed89bfb9-36594117%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbc5d4f327df348e0215afb6fe4171b64c61941c' => 
    array (
      0 => 'D:\\data\\domains\\provoda\\www\\system\\controllers\\blog\\tpl\\item.tpl',
      1 => 1626993006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '903860843616d50ed89bfb9-36594117',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'new' => 0,
    'item_id' => 0,
    'item_parents' => 0,
    'site_url' => 0,
    'item_alias' => 0,
    'html_plugins_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_616d50ed905758_41431506',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_616d50ed905758_41431506')) {function content_616d50ed905758_41431506($_smarty_tpl) {?><form id="item-form" action="" method="post" enctype="multipart/form-data">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title text-uppercase">
                <span class="glyphicon glyphicon-duplicate"></span>
                <?php if ($_smarty_tpl->tpl_vars['new']->value) {?>Создание нового материала<?php } else { ?>Редактирование материала<?php }?>
                <?php if (!$_smarty_tpl->tpl_vars['new']->value) {?>
                    <span class="pull-right text-lowercase">
                            <a href="?c=blog&act=new" class="btn btn-info btn-xs" data-toggle="tooltip" title="" data-original-title="Создать новвый материал"><span class="glyphicon glyphicon-copy"></span></a>
                            <a href="?c=blog&act=del-item&id=<?php echo $_smarty_tpl->tpl_vars['item_id']->value;?>
&cid=<?php echo $_smarty_tpl->tpl_vars['item_parents']->value[0];?>
" class="btn btn-danger btn-xs confirm" data-toggle="tooltip" title="" data-original-title="Удалить материал"><span class="glyphicon glyphicon-remove"></span></a>
                    </span>
                <?php }?>
                <div class="pull-right">
                    <button type="submit" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-floppy-disk"></span> Сохранить</button>

                </div>
            </h3>
        </div>
        <div class="panel-body">
            <?php if (!$_smarty_tpl->tpl_vars['new']->value) {?>
                <div class="alert alert-info">
                    <div class="row">
                        <span class="col-sm-3 text-right">URL материала:</span>
                        <span class="col-sm-9"><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
blog/<?php echo $_smarty_tpl->tpl_vars['item_alias']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
blog/<?php echo $_smarty_tpl->tpl_vars['item_alias']->value;?>
</a></span>
                    </div>
                    <div class="row">
                        <span class="col-sm-3 text-right">Короткая ссылка:</span>
                        <span class="col-sm-9"><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
blog/<?php echo $_smarty_tpl->tpl_vars['item_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
blog/<?php echo $_smarty_tpl->tpl_vars['item_id']->value;?>
</a></span>
                    </div>
                </div>
            <?php }?>
            <div class="tabs">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab-common" data-toggle="tab">Общие</a></li>
                    <li><a href="#tab-content" data-toggle="tab">Содержимое</a></li>
                    <li><a href="#tab-images" data-toggle="tab">Изображения</a></li>
                    <li><a href="#tab-files" data-toggle="tab">Файлы</a></li>
                    <li><a href="#tab-seo" data-toggle="tab">SEO</a></li>

                    
                </ul>
                <div class="tab-content">
                    <div id="tab-common" class="tab-pane fade in active">
                        <h3>Общие данные</h3>
                        <p><?php echo $_smarty_tpl->getSubTemplate ("item-common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</p>
                    </div>
                    <div id="tab-content" class="tab-pane fade">
                        <h3></h3>
                        <p><?php echo $_smarty_tpl->getSubTemplate ("item-content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</p>
                    </div>
                    <div id="tab-price" class="tab-pane fade">
                        <h3></h3>
                        <p><?php echo $_smarty_tpl->getSubTemplate ("item-price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</p>
                    </div>
                    <div id="tab-images" class="tab-pane fade">
                        <h3></h3>
                        <p><?php echo $_smarty_tpl->getSubTemplate ("item-images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</p>
                    </div>
                    <div id="tab-files" class="tab-pane fade">
                        <h3></h3>
                        <p><?php echo $_smarty_tpl->getSubTemplate ("item-files.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</p>
                    </div>
                    <div id="tab-other" class="tab-pane fade">
                        <h3></h3>
                        <p><?php echo $_smarty_tpl->getSubTemplate ("item-fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</p>
                    </div>
                    <div id="tab-seo" class="tab-pane fade">
                        <h3></h3>
                        <p><?php echo $_smarty_tpl->getSubTemplate ("item-seo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</p>
                    </div>
                </div>
            </div>



        </div>
    </div>
</form>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['html_plugins_dir']->value;?>
init_mce.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    
    $(document).ready(function(){
/*        $.cleditor.set_rfm('/filemanager');
        var  controls=
        "bold italic underline strikethrough subscript superscript | font size " +
                "style | color highlight removeformat | bullets numbering | outdent " +
                "indent | alignleft center alignright justify | " +
                "rule image link unlink | source";
        $("#short_content").cleditor({'controls':controls});
        $("#content").cleditor({'controls':controls});*/

    });

    
    var alias_page_new = false;
    if ($("#alias").val()==''){
        alias_page_new = true;
    }
    $("#title").change(function(){
        if (alias_page_new){
            var str = $(this).val();
            var str2 = SetTranslitRuToLat(str);
            $("#alias").val(str2);
        }
    });
    $("#item-form").submit(function(){
        var alias_page = $(this).find("input[name='alias']").val();
        if (alias_page != ''){
            var pattern = /^[a-z0-9_-]+$/i;
            if (!pattern.test(alias_page)){
                alert('Алиас содержит недопустимые символы');
                return false;
            }
        }


        var chs = $(this).find("input[name='parents[]']:checked");
        if (chs.length==0){
            alert("Необходимо выбрать хотя бы одну категорию");
            return false;
        }
    });
    $(".confirm").click(function(e){
        if (!confirm("Вы уверенны что хотите это сделать?")){
            e.preventDefault();
        }
    });
<?php echo '</script'; ?>
>
<?php }} ?>
