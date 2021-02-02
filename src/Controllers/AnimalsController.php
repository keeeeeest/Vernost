<?php

namespace Konstantin\Vernost\Controllers;

use Konstantin\Vernost\Base\Controller;
use Konstantin\Vernost\Services\AnimalService;
// use Konstantin\Vernost\Base\Request;

class AnimalsController extends Controller {
    
    private $animalService;

    public function __construct()
    {
        $this->animalService = new AnimalService();
    }

    public function showAnimals(){
        $animals = $this->animalService->getAnimals();
        $content = 'animals.php';
        $data = [
            'title' => 'Животные',
            'animals' => $animals
        ];
        return $this->generateResponse($content, $data);
    }

}