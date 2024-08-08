<?php
include_once "base.php";
$do = $_POST['table'];
$db = ${ucfirst($do)};
// $$_POST['id']=$_POST['sh'];
// dd($_POST);
// echo $id;
// dd($_POST['del']);

// foreach ($_POST['del'] as $key => $id) {
// echo "$key,$id";
// dd($id);
// $db->del($id);
// }
unset($_POST['table']);

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
                $row['text'] = $_POST['text'][$key];
                $row['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
                break;
            case 'image':
            case 'mvim':
                $row['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
                break;
            case 'logos':
                $row['sh'] = (isset($_POST['sh']) && $_POST['sh'] == $id) ? 1 : 0;
                break;
            case "news":
                // $row['title'] = $_POST['title'][$key];
                $row['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
                break;
        }

        $db->save($row);
    }
}
to("../admin.php");
