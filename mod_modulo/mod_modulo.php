<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_modulo
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Se puede agregar un helper para el manejo de bases de datos, para este ejemplo lo omitire
//require_once __DIR__ . '/helper.php';
//$list = modModulo::getList($params);

// Asignamos la vista a mostrar, por default
require JModuleHelper::getLayoutPath('mod_modulo', $params->get('layout', 'default'));
