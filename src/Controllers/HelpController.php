<?php

namespace Konstantin\Vernost\Controllers;

use Konstantin\Vernost\Base\Controller;

class HelpController extends Controller {
    

    public function helpAction(){
        $content = 'help.php';
        $data = [
            'title' => 'Помочь нам',
        ];
        return $this->generateResponse($content, $data);
    }

}