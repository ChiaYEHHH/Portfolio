<?php
include_once "base.php";
$do = $_POST['table'];
$db = ${ucfirst($do)};

foreach ($_POST['id'] as $key => $id) {
    if (!empty($_POST['del']) && in_array($id, $_POST['del'])) {
        $db->del($id);
    } else {
        $row = $db->find($id);

        switch ($do) {
            case 'admin':
                $row['acc'] = $_POST['acc'][$key];
                $row['pw'] = $_POST['pw'][$key];
                break;
            case 'menu':
                $row['href'] = $_POST['href'][$key];
                $row['text'] = $_POST['text'][$key];
                $row['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
                break;
            case 'title':
                $row['sh'] = (isset($_POST['sh']) && $_POST['sh'] == $id) ? 1 : 0;
                $row['text'] = $_POST['text'][$key];
                break;
            case "ad":
            case "news":
                $row['text'] = $_POST['text'][$key];
                $row['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
                break;
            case 'image':
            case 'mvim':
                $row['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
        }

        $db->save($row);
    }
}
to("../admin.php?do=$do");
