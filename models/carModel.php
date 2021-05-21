<?php
namespace lab7\models;

class carModel
{

    public function getMake($dbcon) {
        //make is the name of the table in the "cars" database.
        $query = "SELECT * FROM make";
        $pst = $dbcon->prepare($query);
        $pst->execute();

        $results = $pst->fetchAll(\PDO::FETCH_OBJ);
        return $results;

    }

    //public function nameOfMake($dbcon, )

    public function getModelById($id, $db){
        $sql = "SELECT * FROM car_models where id = :id";
        $pst = $db->prepare($sql);
        $pst->bindParam(':id', $id);
        $pst->execute();
        //var_dump($pst->fetch(PDO::FETCH_OBJ));
        return $pst->fetch(\PDO::FETCH_OBJ);
    }

    public function getAllCars($dbcon){


        $sql = "SELECT * FROM car_models INNER JOIN make ON car_models.make_id = make.make_id";
        $pdostm = $dbcon->prepare($sql);
        $pdostm->execute();

        $cars = $pdostm->fetchAll(\PDO::FETCH_OBJ);
        return $cars;
    }


    public function addModel($make_id, $model, $year, $db)
    {
        $sql = "INSERT INTO car_models (make_id, model, year)
              VALUES (:make_id, :model, :year) ";
        $pst = $db->prepare($sql);

        $pst->bindParam(':make_id', $make_id);
        $pst->bindParam(':model', $model);
        $pst->bindParam(':year', $year);

        $count = $pst->execute();
        return $count;
    }

    public function deleteCarModel($id, $db){
        $sql = "DELETE FROM car_models WHERE id = :id";

        $pst = $db->prepare($sql);
        $pst->bindParam(':id', $id);
        $count = $pst->execute();
        return $count;

    }

    public function updateModel($id, $make_id, $model, $year, $db){

        $sql = "Update car_models
                set make_id = :make_id,
                model = :model,
                year = :year
                WHERE id = :id
        ";

        $pst =  $db->prepare($sql);

        $pst->bindParam(':make_id', $make_id);
        $pst->bindParam(':model', $model);
        $pst->bindParam(':year', $year);
        $pst->bindParam(':id', $id);

        $count = $pst->execute();

        return $count;
    }

}