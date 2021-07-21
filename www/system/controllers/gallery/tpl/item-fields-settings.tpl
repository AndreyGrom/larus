<form method="post">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title text-uppercase">
                <span class="glyphicon glyphicon-duplicate"></span>
                Названия дополнительных полей
            </h3>
        </div>
        <div class="panel-body">
            <div class="form-horizontal" role="form">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Поле №1:</label>
                    <div class="col-sm-9">
                        <input required value="{$config->GalleryField1Name}" name="GalleryField1Name" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Поле №2:</label>
                    <div class="col-sm-9">
                        <input required value="{$config->GalleryField2Name}" name="GalleryField2Name" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Поле №3:</label>
                    <div class="col-sm-9">
                        <input required value="{$config->GalleryField3Name}" name="GalleryField3Name" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Поле №4:</label>
                    <div class="col-sm-9">
                        <input required value="{$config->GalleryField4Name}" name="GalleryField4Name" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Поле №5:</label>
                    <div class="col-sm-9">
                        <input required value="{$config->GalleryField5Name}" name="GalleryField5Name" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Поле №6:</label>
                    <div class="col-sm-9">
                        <input required value="{$config->GalleryField6Name}" name="GalleryField6Name" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Поле №7:</label>
                    <div class="col-sm-9">
                        <input required value="{$config->GalleryField7Name}" name="GalleryField7Name" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Поле №8:</label>
                    <div class="col-sm-9">
                        <input required value="{$config->GalleryField8Name}" name="GalleryField8Name" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Поле №9:</label>
                    <div class="col-sm-9">
                        <input required value="{$config->GalleryField9Name}" name="GalleryField9Name" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Поле №10:</label>
                    <div class="col-sm-9">
                        <input required value="{$config->GalleryField10Name}" name="GalleryField10Name" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="text-right">
                <button type="submit" name="save-fields" class="btn btn-success btn-large"><span class="glyphicon glyphicon-floppy-disk"></span> Сохранить</button>
            </div>
        </div>
    </div>
</form>