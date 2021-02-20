<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */

?>
<script>
    const componentName = 'boilerplate.component';
    const actionName = 'test';

    BX.ajax.runComponentAction(componentName, actionName, {
        mode: 'ajax', // || class - обращаться к классу компонента или к ajax.php файлу
        data: {
            property_name1: 'testMessage1',
            property_name2: 'testMessage2',
        }
    }).then(function (response) {
        console.log(response);
    });
</script>
