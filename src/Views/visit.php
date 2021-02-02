<?php 

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
    if (isset($item) && trim($item) == ''  ) {
        echo '<div class="error">' . $message . '</div>';
    }
}

function printPostValue($item){
    if (isset($item) && strlen(trim($item)) > 0 ) {
        echo $item;
    }
}

?>

<head>
    <link rel="stylesheet" href="/static/css/visit.css">
</head>

<main class="container">

    <form class="visit" method="POST" name="visitForm" action="visit.php">
        <div class="form-left-decoration"></div>
        <div class="form-right-decoration"></div>
        <div class="circle"></div>
        <div class="form-inner">
            <h3>Запланируйте свой визит</h3>
            <input type="text" name="userName" placeholder="Ваше имя" class="userName">
            
            <?php checkValue($_POST['email'], 'Вы не ввели email.'); ?>
            <input type="email" class="email field" name="userEmail" placeholder="Ваш Email" value="<?php printPostValue($_POST['email']); ?>">
            
            <p>Выберите дату: </p>
            <?php checkValue($_POST['date'], 'Вы не выбрали дату'); ?>
            <input type="date" class="date field" name="userDate" value="<?php printPostValue($_POST['date']); ?>">
            
            <textarea name="message" class="message" placeholder="Сообщение..." rows="3"></textarea>
            
            <input type="submit" value="Отправить" class="send">
        </div>
    </form>
</main>

<script src="/static/js/visit.js"></script>