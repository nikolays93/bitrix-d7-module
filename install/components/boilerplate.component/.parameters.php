<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
/**
 * @global $arCurrentValues
 */
use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

$arComponentParameters = array(
	'GROUPS' => array(
		// Built in:
		//     - 'COMPONENT_TEMPLATE',
		//     - 'BASE',
		//     - 'DATA_SOURCE',
		//     - 'VISUAL',
		//     - 'USER_CONSENT',
		//     - 'URL_TEMPLATES',
		//     - 'SEF_MODE',
		//     - 'AJAX_SETTINGS',
		//     - 'CACHE_SETTINGS',
		//     - 'ADDITIONAL_SETTINGS',
		'EXAMPLE' =>  array(
			'NAME'  =>  'Example',
			'SORT'  =>  '300',
		),
	),
	'PARAMETERS' => array(
		"ExampleField" => array(
			// Group name. Default: ADDITIONAL_SETTINGS
			"PARENT" => "BASE",
			// Field name
			"NAME" => Loc::getMessage('BOILERPLATE_MODULE_COMPONENT_EXAMPLE_FIELD_PARAMETER'),
			// Field type: STRING | CHECKBOX | LIST
			"TYPE" => 'STRING',
			// Default value
			"DEFAULT" => "Default value",
			// Refresh (AJAX) all settings after change this field: N | Y
			"REFRESH" => "N",
			// Can be array value: N | Y
			"MULTIPLE" => "N",
			// Can be another value (as simple for list): N | Y
			"ADDITIONAL_VALUES" => "N",
			// List size: int
			"SIZE" => "",
			// Width length characters
			"COLS" => "5",
		),
		'CHECKBOX' => array(
			'PARENT' => 'EXAMPLE',
			'NAME' => 'Checkbox field',
			'TYPE' => 'CHECKBOX',
		),
		'LIST_SINGLE' => array(
			'PARENT' => 'EXAMPLE',
			'NAME' => 'List',
			'TYPE' => 'LIST',
			'VALUES' => array(
				'1' => 'First',
				'2' => 'Second',
				'3' => 'Third',
			),
			'MULTIPLE' => 'N',
		),
		'LIST_MULTIPLE' => array(
			'PARENT' => 'EXAMPLE',
			'NAME' => 'Multiple list',
			'TYPE' => 'LIST',
			'VALUES' => array(
				'1' => 'First',
				'2' => 'Second',
				'3' => 'Third',
			),
			'MULTIPLE' => 'Y',
			"SIZE" => "2",
		),
	),
);
