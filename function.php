<?php

//
// FUNCTION
//

// Код обработчика ошибок SQL.
function databaseErrorHandler($message, $info) {
    // Если использовалась @, ничего не делать.
    if (!error_reporting())
        return;
    // Выводим информацию об ошибке.
    $path = strstr($message, '/');
    // Сообщение об ошибке без пути
    echo "SQL Error: " . rtrim($message, 'at ' . $path);
    // Кнопка "назад"
    exit('<br><a href="install.php">Sing in database</a>');
}

 // Пишем лог в firePHP
function myLogger($db, $sql, $caller) {
    global $firePHP;
    if (isset($caller['file'])) {
        $firePHP->group("at " . @$caller['file'] . ' line ' . @$caller['line']);
    }
    $firePHP->log($sql);
    if (isset($caller['file'])) {
        $firePHP->groupEnd();
    }
}

// Обработка входящего объявления
function prepareQuery($exp, $id) {
    $exp['id'] = $id;
    if (isset($exp['button_add'])){
        unset($exp['button_add']);
    }
    foreach ($exp as $key => &$value) {
        $query[$key] = strip_tags($value);
    }
    $query['price'] = (float) $query['price'];
    $query['time'] = Date('d.m.Y H:i:s', time());
    return $query;
}