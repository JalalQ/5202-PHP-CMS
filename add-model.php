<?php
use lab7\models\carModel;
use lab7\models\Database;
require_once 'vendor/autoload.php';
require_once "library/form-functions.php";
//require_once 'models/database.php';
//require_once 'models/carModel.php';

$m = new carModel();
$car_make = $m->getMake(Database::getDb());
//var_dump($car_make);

if(isset($_POST['addModel'])){
    $make = $_POST['make'];
    $model = $_POST['model'];
    $year = $_POST['year'];


    $db = Database::getDb();
    $carmodel = new carModel();

    $count = $carmodel->addModel($make, $model, $year, $db);


    if($count){
        header('Location:  list.php');
    } else {
        echo "problem adding a student";
    }

}
?>


<html lang="en">

<head>
    <title>Add Car Model - </title>
    <meta name="description" content="Car Model">
    <meta name="keywords" content="Car">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style/main.css" type="text/css">
</head>

<body>

<div>
    <!--    Form to Add  Student -->
    <form action="" method="post">

        <div class="form-group">
            <label for="make">Make :</label>
            <select  name="make" class="form-control" id="make" >
                <?php echo  populateDropdown($car_make) ?>
            </select>
            <span style="color: red">

            </span>
        </div>

        <div class="form-group">
            <label for="model">Model :</label>
            <input type="text" class="form-control" id="model" name="model"
                   placeholder="Enter Car Model">
            <span style="color: red">

            </span>
        </div>

        <div class="form-group">
            <label for="year">Year :</label>
            <input type="text" name="year" class="form-control" id="year"
                   placeholder="Enter Year">
            <span style="color: red">

            </span>
        </div>

        <a href="./list.php" id="btn_back" class="btn btn-success float-left">Back</a>
        <button type="submit" name="addModel"
                class="btn btn-primary float-right" id="btn-submit">
            Add Car Model
        </button>
    </form>
</div>


</body>
</html>