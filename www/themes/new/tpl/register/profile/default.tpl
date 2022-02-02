{include file="../../common/header.tpl"}

<div class="profile-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12">
                <h2>Мой профиль</h2>
                <p>&nbsp;</p>
                <table class="table table-bordered table-hover">
                    <tr>
                        <td>ФИО</td>
                        <td>{$user.FIO}</td>
                    </tr>
                    <tr>
                        <td>E-mail:</td>
                        <td>{$user.EMAIL}</td>
                    </tr>
                    <tr>
                        <td>Телефон:</td>
                        <td>{$user.PHONE}</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                {include file="../../common/profile-sidebar.tpl"}
            </div>

        </div>
    </div>
</div>



{include file="../../common/footer.tpl"}