<?php

namespace Konstantin\Vernost\Controllers;

use Konstantin\Vernost\Base\Controller;
use Konstantin\Vernost\Base\Request;
use Konstantin\Vernost\Services\FormService;

class FormController extends Controller {

    /*
    private $formService;

    public function __construct()
    {
        $this->formService = new FormService();
    }
    */
    
    public function visitFormAction(){
        echo 'Отправлено!';
    }

    /*
    public function findAnimal(Request $request){
        $result = $this->formService->($request->get());
        
    }
    */

    public function showFindAnimal(){
        $content = 'find_animal.php'; 
        $data = [ 
            'title' => 'Найденные животные' 
        ];
        return $this->generateResponse($content, $data);
    }
}