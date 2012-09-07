<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2012 Leo Feyer
 *
 * @package   DBCheck
 * @author    Sergey Dyagovchenko aka DyaGa
 * @license   GNU/LGPL
 * @copyright Sergey Dyagovchenko 2012
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'DBCheck',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Modules
	'DBCheck\ModuleDBCheck' => 'system/modules/dbcheck/modules/ModuleDBCheck.php',
));
