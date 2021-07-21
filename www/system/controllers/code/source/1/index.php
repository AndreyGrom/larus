<p>Данный гороскоп не придумывается людьми, как это делается практически везде, а вычисляется как и положено на основе положения звезд, путем очень сложных математических расчетов.</p>
<?php
function horo(){
    $s=@file_get_contents("http://oculus.ru/export/js/prog.js");
    if (trim($s)!==''){
        $s=explode('"', $s);
        $s=$s[1];
        $s=explode('<a', $s);
        $s=$s[0];
        $s=iconv('windows-1251',"UTF-8",$s);
    }  else
        $s='<div>Гороскоп недоступен</div>';
    return $s;
}
   echo horo();
?>