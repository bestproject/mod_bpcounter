<?php

defined('_JEXEC') or die;

$label          = $params->get('label', '');
$number     = $params->get('number', 10);
$time      = $params->get('time', 3000);
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require JModuleHelper::getLayoutPath('mod_bpcounter', $params->get('layout', 'default'));
