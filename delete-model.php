<?php
use lab7\models\carModel;
use lab7\models\Database;
require_once 'vendor/autoload.php';
//require_once 'models/database.php';
//require_once 'models/carModel.php';

if(isset($_POST['id'])){
    $id = $_POST['id'];
    $db = Database::getDb();

    $carmodel = new carModel();
    $count = $carmodel->deleteCarModel($id, $db);
    if($count){
        header("Location: list.php");
    }
    else {
        echo "problem deleting";
    }


}