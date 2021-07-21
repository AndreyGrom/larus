<?php
function get_an($d, $t){
    $types = array(
        array('anekdot','j'),
        array('story','o'),
        array('aphorism','a'),
        array('poems','c'),
        array('caricatures','e')
    );
    $site='http://www.anekdot.ru/';
    if ($d=='last'){
        $url=$site.'/last/'.$types[$t][0].'/';
    }else {
        if (strpos($d,'.'))
            $date = explode('.',$d);
        elseif (strpos($d,'/'))
            $date = explode('/',$d);
        if (strlen ($date[2])==4)
            $date[2] = substr($date[2], 2);
        $url = $site.'an/an'.$date[2].$date[1].'/'.$types[$t][1].$date[2].$date[1].$date[0].'.html';
    }
    $file = @file_get_contents($url);
    if (!$file) return false;
    $file = substr($file,strpos($file, '<div class="text" id="txt_id_'));
    $list = explode('<div class="text" id="txt_id_', $file);
    $res='';
    foreach ($list as $value){
        $an_id=substr($value, 0,strpos($value,'">'));
        $v = substr($value,strpos($value, '">')+2);
        $v=explode('</div>',$v);
        if (strpos($v[0], '<a')!==false){
            $v[0] = substr($v[0],0,strpos($v[0],'<a'));
        }
        if ($v[0]!=='')
            $res .= '<div id="'.$an_id.'" class="an-item">'.$v[0].'</div>'."\r\n";
    }
    return $res;
}
$this->js[] = HTML_PLUGINS_DIR.'jquery-ui.min.js';
$this->css[] = HTML_PLUGINS_DIR.'jquery-ui.css';
$t=isset($this->get['t'])?$this->get['t']:0;
$d=($_GET['d']=='')?'last':$_GET['d'];
?>
<style>
    .an-item{margin-bottom:20px;border:1px solid #000;padding:5px;}
    .menu{margin:20px 0;}
    .menu a{display: inline-block;margin:0 10px;}

</style>
    <div class="menu">
        <a href="?t=0">Анекдоты</a>
        <a href="?t=1">Истории</a>
        <a href="?t=2">Афоризмы</a>
        <a href="?t=3">Стишки</a>
        <a href="?t=4">Карикатуры</a>
        Дата: <input type="text" id="dt" value="<?php echo $_GET['d']?>"/>

        <script>
            $(document).ready(function(){
                var t = <?php echo $t?>;
                jQuery("#dt").datepicker(
                    {
                        changeMonth:true, changeYear:true,
                        dateFormat: "dd.mm.yy",
                        onSelect: function(dateText, inst) {
                            document.location.href = '?t='+t+'&d='+dateText;
                        }
                    }
                );
            });
        </script>
    </div>

    <?php echo get_an($d,$t);?>
