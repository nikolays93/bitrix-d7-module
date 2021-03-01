<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;
use \Bitrix\Main\Loader;

class BoilerplateComponent extends CBitrixComponent
{
    /**
     * @param CBitrixComponent|null $component
     * @throws Bitrix\Main\LoaderException
     */
    public function __construct($component = null)
    {
        parent::__construct($component);
        // Loader::includeModule('iblock');
        // Loader::includeModule('sale');
        // Loader::includeModule('catalog');
        // Loader::includeModule('boilerplate.module');
        $this->arResult['ERRORS'] = [];
    }

    public function onIncludeComponentLang()
    {
        Loc::loadLanguageFile(__FILE__);
    }

    public function onPrepareComponentParams($arParams = array())
    {
        return $arParams;
    }

    public function executeComponent()
    {
        try {

        } catch (Exception $exception) {
            array_push($this->arResult['ERRORS'], new Error($exception->getMessage()));
        }

        $this->includeComponentTemplate();
    }
}
