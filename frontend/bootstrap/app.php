<?php

/**
 * Carrega o composer Autoload
 */
require __DIR__ . '/../vendor/autoload.php';

/**
 * Configura a Template Engine Smarty
 */
$smarty = new Smarty();
$smarty->setTemplateDir('../views');


/**
 * Inicia a aplicação
 */
Flight::register('smarty', $smarty);
Flight::start();