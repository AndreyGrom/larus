<?php
$sql = "CREATE TABLE IF NOT EXISTS ".$db_prefix."gallery_c
        (
        ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        PARENT INT NOT NULL,
        TITLE varchar(255),
        ALIAS varchar(255),
        POSITION INT NOT NULL,
        PUBLIC INT(1) NOT NULL,
        TEMPLATE varchar(255),
        META_DESC varchar(255),
        META_KEYWORDS varchar(255),
        IMAGE varchar(255),
        `DESC` text,
        `DESC2` text
        ) ENGINE=InnoDB DEFAULT CHARACTER SET=utf8";
$db->query($sql);
$sql = "CREATE TABLE IF NOT EXISTS ".$db_prefix."gallery_i
        (
        ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        TITLE varchar(255),
        ALIAS varchar(255),
        PARENT INT NOT NULL,
        TEMPLATE varchar(255),
        PUBLIC INT(1) NOT NULL,
        COMMENTS INT(1) NOT NULL,
        IMAGES text,
        FILES text,
        DATE_PUBL INT(1) NOT NULL,
        DATE_EDIT INT(1) NOT NULL,
        POSITION INT NOT NULL,
        SHORT_CONTENT text,
        CONTENT text,
        META_DESC varchar(255),
        META_KEYWORDS varchar(255),
        TAGS text,
        SKIN varchar(255),
        PRICE decimal(10,0),
        PRICE_NEW decimal(10,0),
        OTHER1 text,
        OTHER2 text,
        OTHER3 text,
        OTHER4 text,
        OTHER5 text,
        OTHER6 text,
        OTHER7 text,
        OTHER8 text,
        OTHER9 text,
        OTHER10 text,
        FILE1 varchar(255),
        FILE2 varchar(255),
        FILE3 varchar(255),
        FILE1_NAME varchar(255),
        FILE2_NAME varchar(255),
        FILE3_NAME varchar(255)
        ) ENGINE=InnoDB DEFAULT CHARACTER SET=utf8";
$db->query($sql);
$date = time();
$sql = "INSERT INTO `".$db_prefix."gallery_c` (`PARENT`,`TITLE`,`ALIAS`,`POSITION`,`PUBLIC`,`TEMPLATE`,`DESC`,`DESC2`)
 VALUES
 ('0','Первая категория Галереи','category1','99999','1','default_cat_list','Описание категории №1','Описание категории №2')";
$db->query($sql);
$sql = "INSERT INTO `".$db_prefix."gallery_i` (`TITLE`,`ALIAS`,`PARENT`,`TEMPLATE`,`PUBLIC`,`COMMENTS`,`DATE_PUBL`,`DATE_EDIT`,`SHORT_CONTENT`,`CONTENT`)
 VALUES
 ('Мой первый пост','post1',',1,','default','1','1','$date','$date','<p>Краткое описание материала</p>','<p>Полное описание материала</p>')";
$db->query($sql);
$array_config = array(
    "GallerySubCategories" => "0",
    "GalleryModuleTitle" => "Галерея проектов",
    "GalleryField1Name" => "Поле 1",
    "GalleryField2Name" => "Поле 2",
    "GalleryField3Name" => "Поле 3",
    "GalleryField4Name" => "Поле 4",
    "GalleryField5Name" => "Поле 5",
    "GalleryField6Name" => "Поле 6",
    "GalleryField7Name" => "Поле 7",
    "GalleryField8Name" => "Поле 8",
    "GalleryField9Name" => "Поле 9",
    "GalleryField10Name" => "Поле 10",
    "GalleryImageWidthCategoryList" => "200",
    "GalleryImageHeightCategoryList" => "200",
    "GalleryImageWidthItemList" => "200",
    "GalleryImageHeightItemList" => "200",
    "GalleryCategoryListPerPage" => "10",
    "GalleryItemListSort" => "ASC",
    "GalleryEnabled" => "1",
    "GalleryCommentsEnabled" => "1",
    "GalleryCommentsTemplateView" => "default",
    "GalleryCommentsTemplateForm" => "default",
);
foreach ($array_config as $k=>$v){
    $sql = "INSERT INTO `".$db_prefix."config` (`PARAM`,`VALUE`) VALUES('".$k."','".$v."') ";
    $db->query($sql);
}
?>