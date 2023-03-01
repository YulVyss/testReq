<?php
$login = 'YulVyss';
$pass = '0223891001677585512';

// $client = new SoapClient('https://api.forum-auto.ru/wsdl', ["exceptions" => true]);

try {

  // Выполнение запроса к серверу API Форум-Авто

  $result = $client->listOrders($login, $pass, $did);

  // Результат запроса

  echo '<pre>' . var_export($result, true) . '</pre>';

} catch (SoapFault $e) {

  echo "Exception: (faultcode: {$e->faultcode}, faultstring: {$e->faultstring}, detail: {$e->detail})";

}