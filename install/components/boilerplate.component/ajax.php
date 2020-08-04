<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;
use \Bitrix\Main\Loader;

class BoilerplateAjaxController extends Controller
{
	/**
	 * @param Request|null $request
	 * @throws LoaderException
	 */
	public function __construct($request = null)
	{
		parent::__construct($request);
		// Loader::includeModule('iblock');
		// Loader::includeModule('sale');
		// Loader::includeModule('catalog');
		Loader::includeModule(boilerplate_module::MODULE_ID);
	}

	/**
	 * @return array
	 */
	public function configureActions()
	{
		return array(
			'Test' => array(
				'prefilters' => array()
			),
		);
	}

	/**
	 * @return array
	 */
	public function TestAction($property_name1, $property_name2)
	{
		// CBitrixComponent::includeComponentClass('boilerplate.component');
		return compact('property_name1', 'property_name2');
	}
}
