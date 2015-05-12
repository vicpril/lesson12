<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
ini_set('display_errors', 1);
header("Content-Type: text/html; charset=utf-8");

date_default_timezone_set('Asia/Novosibirsk');

$project_root = __DIR__;
$filename_user = 'user.php';
$smarty_dir = $project_root . '/smarty/';

// put full path to Smarty.class.php
require($smarty_dir . '/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->compile_check = true;
$smarty->debugging = false;

$smarty->template_dir = $smarty_dir . 'templates';
$smarty->compile_dir = $smarty_dir . 'templates_c';
$smarty->cache_dir = $smarty_dir . 'cache';
$smarty->config_dir = $smarty_dir . 'configs';

// Подключаем библиотеку FirePHPCore
require_once ($project_root . '/FirePHPCore/FirePHP.class.php');

// Инициализируем класс FirePHP
$firePHP = FirePHP::getInstance(true);

// Устанавливаем активность. Если выключить (false), то отладочные сообщения не будут
// отображаться в FireBug
$firePHP->setEnabled(true);

//
// Main block
//

// Работа скрипта
require 'function.php';
include 'connectDB.php';
include 'notice_board.php';
include 'explanation.php';

$mysqli = ConnectDB::connectDB($filename_user, $project_root);

$id = (isset($_GET['id'])) ? $_GET['id'] : '';

if (isset($_POST['button_add'])) {
    if ($_POST['private'] == 0) {
                $exp = new PrivateExplanation(Explanation::prepareQuery($_POST, $id));
            } else {
                $exp = new CorporateExplanation(Explanation::prepareQuery($_POST, $id));
            }
    $exp->save();
}

$instance = Notice_board::instance()->getAllExpFromDB();

if (isset($_GET['delete']) && isset($instance->board[$_GET['delete']])) {
    $instance->board[$_GET['delete']]->deleteExp($instance);
}

$instance->getListOfExplanations()->display();