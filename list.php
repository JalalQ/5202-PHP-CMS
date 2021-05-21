<?php
use lab7\models\carModel;
use lab7\models\Database;

require_once 'vendor/autoload.php';
require_once "library/form-functions.php";

//require_once 'models/database.php';
//require_once 'models/carModel.php';

$m = new carModel();
$car_make = $m->getMake(Database::getDb());

$dbcon = Database::getDb();
$model = new carModel();
$models =  $model->getAllCars(Database::getDb());

?>
<html lang="en">
<head>
    <title>Car Management</title>
    <meta name="description" content="Car Management System">
    <meta name="keywords" content="Car">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
<p class="h1 text-center">Car Management System</p>
<div class="m-1">
    <!--    Displaying Data in Table-->
    <table class="table table-bordered tbl">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Make</th>
            <th scope="col">Model</th>
            <th scope="col">Year</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($models as $m) { ?>
            <tr>
                <th><?= $m->id; ?></th>
                <td><?= $m->car_make; ?></td>
                <td><?= $m->model; ?></td>
                <td><?= $m->year; ?></td>
                <td>
                    <form action="./update-model.php" method="post">
                        <input type="hidden" name="id" value="<?= $m->id; ?>"/>
                        <input type="submit" class="button btn btn-primary" name="updateModel" value="Update"/>
                    </form>
                </td>
                <td>
                    <form action="./delete-model.php" method="post">
                        <input type="hidden" name="id" value="<?=  $m->id; ?>"/>
                        <input type="submit" class="button btn btn-danger" name="deleteModel" value="Delete"/>
                    </form>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <a href="./add-model.php" id="btn_addStudent" class="btn btn-success btn-lg float-right">Add Car Model</a>

</div>
</body>
</html>