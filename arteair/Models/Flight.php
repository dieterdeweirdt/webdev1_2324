<?php

namespace App\Models;

class Flight extends BaseModel {

 
    protected function getAll() {
        global $db;

        $sql = "SELECT flights.*, 
                        aircrafts.aircraft_code, aircrafts.model, aircrafts.aircraft_id,
                        f.name AS from_name, 
                        t.name AS to_name
                FROM flights
                JOIN aircrafts ON flights.aircraft_id = aircrafts.aircraft_id
                JOIN airports f ON `from` = f.airport_id
                JOIN airports t ON `to` = t.airport_id";

        $query = $db->prepare($sql);
        $query->execute();

        return self::castToModel($query->fetchAll());
    }

    protected function getById($id) {
        global $db;

        $sql = "SELECT flights.*, 
                        aircrafts.aircraft_code, aircrafts.model, 
                        f.name AS from_name, 
                        t.name AS to_name
                FROM flights
                JOIN aircrafts ON flights.aircraft_id = aircrafts.aircraft_id
                JOIN airports f ON `from` = f.airport_id
                JOIN airports t ON `to` = t.airport_id
                WHERE flight_id = ?";

        $query = $db->prepare($sql);
        $query->execute([ $id ]);

        return self::castToModel($query->fetchObject());
    }

    
}