{include file="../common/header.tpl"}
<section>
    <div class="container">
        <div class="row">


            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">


                <div class="row">
                    <form class="form-horizontal" method="post">
                        <div class="col-sm-8 col-sm-offset-2">
                            {if $error}
                            <div class="form-group">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9">
                                    <div class="alert alert-danger">
                                        <p>{$error}</p>
                                    </div>
                                </div>
                            </div>
                            {/if}
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Email:</label>
                                <div class="col-sm-9">
                                    <input required value="" name="email" type="email" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Пароль:</label>
                                <div class="col-sm-9">
                                    <input required value="" name="password" type="password" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button type="submit" name="register" style="margin-top:11px;" class="btn btn-primary pull-right">Войти</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <hr>
            </div>

        </div>
    </div>

</section>
{include file="../common/footer.tpl"}
