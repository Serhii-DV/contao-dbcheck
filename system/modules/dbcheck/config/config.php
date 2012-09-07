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
 * Back end modules
 */
$GLOBALS['BE_MOD']['system']['dbcheck'] = array
(
	'callback'	=> 'ModuleDBCheck',
	'icon'		=> 'system/modules/repository/themes/default/images/dbcheck16.png'
);
