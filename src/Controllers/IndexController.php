<?php

namespace Konstantin\Vernost\Controllers;

use Konstantin\Vernost\Base\Controller;

class IndexController extends Controller
{
    // метод отвечает за отображение главной страницы
    // запрос - /
    public function mainAction(){ 
        $content = 'main.php'; 
        $data = [ 
            'title' => 'Главная' 
        ]; 
        return $this->generateResponse($content, $data);
    }
}