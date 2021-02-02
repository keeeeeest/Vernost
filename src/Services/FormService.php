<?php 

namespace Konstantin\Vernost\Services;

use Konstantin\Vernost\Base\Service;
use Konstantin\Vernost\Base\Request;


class FormService extends Service {

/*
    public function findBreed(Request $request) {
        $search = $this->$request->get()['breed'];
        $sql = 'SELECT * FROM animal WHERE breed = $search';
        $result = $this->dbConnection->queryAll($sql);
    }

    public function findColor(Request $request) {
        $search = $this->$request->get()['color'];
        $sql = 'SELECT * FROM animal WHERE color = $search';
        $result = $this->dbConnection->queryAll($sql)
    }

    public function findGender(Request $request) {
        $search = $this->$request->get()['gender'];
        $sql = 'SELECT * FROM animal WHERE gender = $search';
        $result = $this->dbConnection->queryAll($sql)
    }

    public function doesItExist(array $arr) {
        $data = array(
            'breed' => $arr['breed'] != false ? $arr['breed'] : 'Нет данных',
            'city' => $arr['color'] != false ? $arr['color'] : 'Нет данных',
            'year' => $arr['gender'] != false ? $arr['gender'] : 'Нет данных'
        );
        return $data;
    }
*/
}

    public function getAnimals() {
        if (!empty($_POST) 
        && trim($_POST['name']) != '' 
        && trim($_POST['email']) != '' 
        && trim($_POST['date']) != '' 
        && trim($_POST['message']) != ''  ) {

        $message =  "Вам пришла новая заявка с сайта: \n" .
                    "Имя отправителя: " . $_POST['userName'] . "\n" .
                    "Email отправителя: ". $_POST['userEmail'] . "\n" .
                    "Желаемая дата приезда: ". $_POST['date'] . "\n" .
                    "Сообщение: ". $_POST['message'];

        mail( 'email@email.em', "Заявка с сайта!", $message );

        // header('location: thankyou.php');

    }



function checkValue($item, $message ) {
    if ( isset($item) && trim($item) == ''  ) {
        echo '<div class="error">' . $message . '</div>';
    }
}

function printPostValue($item){
    if ( isset($item) && strlen(trim($item)) > 0 ) {
        echo $item;
    }
}
}


/*
 $sql = 'SELECT * FROM animal WHERE breed = :breed AND color = :color AND gender = :gender';
            $result = $this->dbConnection->execute(
                $sql, 
                ['breed'=>$breed, 
                'color'=>$color,
                'gender'=>$gender],
                true
            );
            return $result;
*/

/*
    const SEND_ERROR = 'Упс! Что-то пошло не так. Письмо не отправлено';
    const SEND_OK = 'Заявка успешно отправлена';

    public function sendMessage(){
        if (!empty($_POST) && trim($_POST['name']) 
            != '' && trim($_POST['email']) 
            != '' && trim($_POST['message']) 
            != ''  ) {

            $message =  "Вам пришло новое сообщение с сайта: \n" .
                        "Имя отправителя: " . $_POST['name'] . "\n" .
                        "Email отправителя: ". $_POST['email'] . "\n" .
                        "Сообщение: ". $_POST['message'];

            $headers = "From: ooo@ooo.oo";


            $sendResult = mail('ooo@ooo.oo', "Заявка на посещение", $message, $headers);

            if ( $sendResult ) {
                // Перенаправляем на страницу "Спасибо"
                header('location: /thankyou');
            } else {
                return self::SEND_ERROR;
            }
        }
    }

    public function checkValue($item, $message ) {
        if ( isset($item) && trim($item) == ''  ) {
            echo $message;
        }
    }

    public function printPostValue($item){
        if ( isset($item) && strlen(trim($item)) > 0 ) {
            echo $item;
        }
    }

    function checkEmail($email){
        if ( isset($email) && trim($email) == '' ) {
            echo 'Email не может быть пустым. Введите email';
        } else if ( isset($email) && !filter_var($email, FILTER_VALIDATE_EMAIL) ){
            echo 'Введите корректный адрес email';
        }
    }
*/
