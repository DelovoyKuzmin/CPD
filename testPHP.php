<?php
if (isset($_POST['ques__one']) && isset($_POST['ques__two'])) {
    // Переменные с формы
$ques__one = $_POST['ques__one'];
$ques__two="5";
    if($_POST['ques__two']=="4"){
        $ques__two="4";
    } else if($_POST['ques__two']=="3"){
        $ques__two="3";
    } else if($_POST['ques__two']=="2"){
        $ques__two="2";
    } else if($_POST['ques__two']=="1"){
        $ques__two="1";
    }
$ques__three="5";
    if($_POST['ques__three']=="4"){
        $ques__three="4";
    } else if($_POST['ques__three']=="3"){
        $ques__three="3";
    } else if($_POST['ques__three']=="2"){
        $ques__three="2";
    } else if($_POST['ques__three']=="1"){
        $ques__three="1";
    }
$ques__four="5";
    if($_POST['ques__four']=="4"){
        $ques__four="4";
    } else if($_POST['ques__four']=="3"){
        $ques__four="3";
    } else if($_POST['ques__four']=="2"){
        $ques__four="2";
    } else if($_POST['ques__four']=="1"){
        $ques__four="1";
    }
$ques__five = $_POST['ques__five'];
$ques__six = $_POST['ques__six'];
$ques__seven = $_POST['ques__seven'];
$ques__eight="Да";
    if($_POST['ques__eight']=="Нет"){
        $ques__eight="Нет";
    }
$ques__nine="Да";
    if($_POST['ques__nine']=="Нет"){
        $ques__nine="Нет";
    }
$ques__ten="Да";
    if($_POST['ques__ten']=="Нет"){
        $ques__ten="Нет";
    }
$ques__eleven="Да";
    if($_POST['ques__eleven']=="Нет"){
        $ques__eleven="Нет";
    }
$ques__twelve = $_POST['ques__twelve'];
    // Параметры для подключения
    $db_host = "localhost"; 
    $db_user = "f0675157_anketa"; // Логин БД
    $db_password = "anketa666"; // Пароль БД
    $db_base = 'f0675157_anketa'; // Имя БД
    $db_table = "table_anketa2"; // Имя Таблицы БД
    try {
        // Подключение к базе данных
        $db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
        // Устанавливаем корректную кодировку
        $db->exec("set names utf8");
        // Собираем данные для запроса
        $data = array( 'ques__one' => $ques__one, 'ques__two' => $ques__two , 'ques__three' => $ques__three, 'ques__four' => $ques__four, 'ques__five' => $ques__five, 'ques__six' => $ques__six, 'ques__seven' => $ques__seven, 'ques__eight' => $ques__eight, 'ques__nine' => $ques__nine, 'ques__ten' => $ques__ten, 'ques__eleven' => $ques__eleven, 'ques__twelve' => $ques__twelve); 
        // Подготавливаем SQL-запрос
        $query = $db->prepare("INSERT INTO $db_table (ques__one, ques__two, ques__three, ques__four, ques__five, ques__six, ques__seven, ques__eight, ques__nine, ques__ten, ques__eleven, ques__twelve) values (:ques__one, :ques__two, :ques__three, :ques__four, :ques__five, :ques__six, :ques__seven, :ques__eight, :ques__nine, :ques__ten, :ques__eleven, :ques__twelve)");
        // Выполняем запрос с данными
        $query->execute($data);
        // Запишим в переменую, что запрос отрабтал
        $result = true;
    } catch (PDOException $e) {
        // Если есть ошибка соединения или выполнения запроса, выводим её
        print "Error!: " . $e->getMessage() . "<br/>";
    }
    if ($result) {
       header("Location: http://f0675157.xsph.ru/result.php");
    }
 } else {
    echo "Error, try again.";
 } 


?>