<style>
    .ot-table {
        width: 100%;
        border: none;
        border-spacing: 0px;
        margin-left: auto;
        margin-right: auto;
    }

    .ot-table td {
        border: 1px solid #000;
        padding: 0;
        text-align: center;
        background: #808080;
        color: #fff;
    }
    .ot-table a{color:#fff;font-size:18px;}

    .symtd1 {
        cursor: pointer;
        font-size: 48px;
    }

    .symtd2 {
        background: #000 !important;
    }

    .symtb {
        height: 80px;
        width: 80px;
        text-align: center;
        border: 4px solid #000;
        margin: 0 auto;
    }

    .mntd {
        border: none !important;
        vertical-align: top;
        width: 100%;
    }
</style>

<div class="alert alert-info">
    Задумайте любое двузначное число.<br> <br>Теперь вычтите из него составляющие его цифры.<br>
    (Например если загадали 54, то 54 – 5 – 4 = 45, а если 78, то 78 – 7 – 8 = 63)<br>
    Теперь в таблице найдите полученное цисло в серых клеточках.<br> <br>СПРАВА от него в черной клеточке
    находится соответствующий ему символ. <br>Вообразите мысленно себе этот значок и щелкните по квадрату.
    В нем появится этот символ.<br>
</div>

<table class="ot-table table">
    <tbody>
    <tr>
        <td class="mntd">
            <table class="symtb" onclick="showAnswer()">
                <tbody>
                <tr>
                    <td id="sh" class="symtd1" align="center"> </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    <tr>
        <td id="sym" align="center" valign="center" width="100%"> </td>
    </tr>
    </tbody>
</table>
<script src="/themes/default/js/netscape.js"></script>
<script>writeTable()</script>