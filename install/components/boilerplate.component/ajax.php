<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Engine\Controller;
use Bitrix\Main\LoaderException;
use \Bitrix\Main\Localization\Loc;
use \Bitrix\Main\Loader;
use Bitrix\Main\Request;

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
		Loader::includeModule('boilerplate.module');
	}

	/**
	 * @return array
	 */
	public function configureActions()
	{
	    return [
            'Test' => [
                'prefilters' => []
            ]
        ];
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
