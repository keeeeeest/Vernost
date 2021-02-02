<?php

namespace Konstantin\Vernost\Controllers;

use Konstantin\Vernost\Base\Controller;

class VisitController extends Controller {

    public function visitAction(){
        $content = 'visit.php';
        $data = [
            'title' => 'Приехать в гости',
        ];
        return $this->generateResponse($content, $data);
    }

}