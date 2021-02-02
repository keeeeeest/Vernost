<?php

namespace Konstantin\Vernost\Services;

use Konstantin\Vernost\Base\Service;

class AnimalService extends Service
{
    // const INSERT_SUCCESS = 1;
    // const INSERT_ERORR = 0;

    public function getAnimals() {
        $sql = 'SELECT * FROM animal';
        return $this->dbConnection->queryAll($sql);
    }

/* // сортировка животного по категории (кот\пёс)
    public function getAnimalsByCategory($categoryName){
        $sql = 'SELECT a.breed, a.animal_name, a.age, a.gender, a.color, a.id_animal, c.description, c.name 
        FROM animal a 
        LEFT JOIN category c
        ON a.id_category = c.id_category
        WHERE c.name = :category;';

        $params = ['category' => $categoryName];
        
        return $this->dbConnection->execute($sql, $params);
    }
*/
    public function getAnimalsById($idAnimal){
        $sql = 'SELECT * FROM animal WHERE id_animal = :id;';
        $params=['id'=>$idAnimal];
        return $this->dbConnection->execute($sql, $params, false);
    }

    /* // добавление животного
    public function addAnimal($animal_data) {
        $sql = 'INSERT INTO animal
                (animal_name, id_category, description, age, passport, vaccination)
                values 
                (:animal_name, :id_category, :description, :age, :passport, :vaccination);';
        // Если константы вынесены в отдельный класс, то обращаемся к ним ИмяКласса::ИМЯ_КОНСТАНТЫ
        return $this->dbConnection->executeSql($sql, $animal_data) ? 
                        self::INSERT_SUCCESS : self::INSERT_ERORR;
    }
    */
}