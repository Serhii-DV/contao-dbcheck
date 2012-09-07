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
 * Namespace
 */
namespace DBCheck;

/**
 * Class ModuleDBCheck
 *
 * @copyright  Sergey Dyagovchenko 2012
 * @author     Sergey Dyagovchenko aka DyaGa
 * @package    Devtools
 */
class ModuleDBCheck extends \BackendModule
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = '';


	/**
	 * Initialize the object
	 */
	public function __construct()
	{
		$this->redirect('contao/main.php?do=repository_manager&update=database');
	}


	/**
	 * Generate the module
	 */
	protected function compile()
	{

	}
}
