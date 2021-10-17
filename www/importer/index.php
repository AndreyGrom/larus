<?php
include_once ("./import.class.php");
$db = new Import("texart.sqlite");
$db->ConnectDB();
$categories = $db->GetCategories();
$db->CloseDB();

if (isset($_POST['create'])){
    $data = array();
    // Пробуем подключится к базе данных сайта
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db_name = "texart";
    $mysqli = new mysqli($host, $user, $pass, $db_name);
    if ($mysqli->connect_error) {
        // Если подключение не прошло, указываем навзания полей по умолчанию
        $data[] = array('id', 'name', 'anons', 'text','parent_category_id');
    } else{
        // Если подключились, то берем название полей с сайта
        // В базе поля по названию не подходят, поэтому пока подключится не советую
        $mysqli->set_charset("utf8");
        if ($rs = $mysqli->query("SELECT * FROM `diafan_service_express_fields` WHERE `cat_id` = 2 AND `trash` = '0'")){
            $array = array();
            while($row = $rs->fetch_array(MYSQLI_ASSOC)){
                $array[] = $row['type'];
            }
            $data[] = $array;
        }

    }

    foreach ($categories as $c) {
        $data[] = array($c['id'], $c['name'], $c['anons'], $c['text'], $c['parent_category_id']);
    }
    $db->create_csv_file($data, "data.csv");
    file_force_download("data.csv");

}
if (isset($_POST['down'])){
    file_force_download("data.csv");
}
function file_force_download($file) {
    if (file_exists($file)) {
        if (ob_get_level()) {
            ob_end_clean();
        }
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($file));
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        if ($fd = fopen($file, 'rb')) {
            while (!feof($fd)) {
                print fread($fd, 1024);
            }
            fclose($fd);
        }
        exit;
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>
        table tr th{text-align: left}
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <h2>Класс для работы с категориями в SQLite</h2>

        <form method="post">
        <button name="create" type="submit" class="btn btn-primary">Создать .csv файл и скачать</button>
            <?php if(file_exists("data.csv")) { ?>
                <button name="down" type="submit" class="btn btn-info">Скачать .csv файл</button>
            <?php } ?>

        </form>
        <p>&nbsp;</p>
        <table class="table-hover table-bordered">
            <tr>
                <th>ID</th>
                <th>Название</th>
                <th>Алиас</th>
                <th>Родитель</th>
                <th>Создано</th>
                <th>Обновлено</th>
            </tr>
            <?php foreach ($categories as $c) { ?>
                <tr>
                    <td><?php echo $c['id']; ?></td>
                    <td><?php echo $c['name']; ?></td>
                    <td><?php echo $c['seo_name']; ?></td>
                    <td><?php echo $c['parent_category_id']; ?></td>
                    <td><?php echo $c['createdAt']; ?></td>
                    <td><?php echo $c['updatedAt']; ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>

</body>
</html>
