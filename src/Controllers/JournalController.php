<?php

namespace Konstantin\Vernost\Controllers;

use Konstantin\Vernost\Base\Controller;

class JournalController extends Controller {

    public function journalAction() {
        $content = 'journal.php'; 
        $data = [ 
            'title' => 'Журнал' 
        ]; 
        return $this->generateResponse($content, $data);
    }

}