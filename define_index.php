<?php

$dir = dirname(__FILE__);
require_once $dir.'/Define_System/core/setup.php';

$system = DefineSystem::activate();
$system->setPredefinesFile($dir.'/.main');
$system->setFunctionsDirectory($dir.'/functions');
$system->setPrefunctionsDirectory($dir.'/prefunctions');
$system->setActionsDirectory($dir.'/defines_application/actions');
$system->setLogDirectory($dir.'/logs');
$system->setCacheDirectory($dir.'/caches');
$system->setConfigsDirectory($dir.'/defines_application/configs');
$system->load();
$system->release();

DefineSystem\Log::info($system->msg(), 'essay');
