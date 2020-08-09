<?php

$siteId = 's1';
$moduleId = 'boilerplate.module';

/**
 * Show settings in admin menu page
 * How to get options:
 *     - CControllerClient::GetInstalledOptions($moduleId)
 *
 * [
 *     Field ID,
 *     Label text
 *     Default value
 *     [
 *         Field type: multiselectbox | textarea | statictext | statichtml | checkbox | text | password | selectbox,
 *         Size | rows | list of values for select,
 *     ],
 *     Disabled: N | Y,
 *     Warning tip text,
 *     isChoiceSites: N | Y
 * ]
 *
 * @link https://dev.1c-bitrix.ru/community/webdev/user/203730/blog/13249/
 */
$aTabs = array(
    array(
        'DIV' => 'boilerplate-settings-1',
        'TAB' => 'Settings',
        'OPTIONS' => array(
            'Main options',
            array('CHECKBOX', 'Checkbox', null, array('checkbox', 0, 'data-value="Y"', 'N', 'Warning tip text', 'N')),
            array('TEXT', 'Text field', null, array('text', 52)),
            array('PASSWORD', 'Password', 'qwerty', array('password', 10, 'noautocomplete' => 'Y')),
            array('TEXTAREA', 'Textarea', null, array('textarea', 5, 10)),
            array('SELECTBOX', 'Choose you option', null, array('selectbox', array(
                'option1' => 'Option 1',
                'option2' => 'Option 2',
            )), ),
            array('MULTISELECTBOX', 'Choose you option', null, array('multiselectbox', array(
                'option1' => 'Option 1',
                'option2' => 'Option 2',
            )), ),
            array('STATICTEXT', 'Statictext', 'Some static text here.', array('statictext')),
            array('STATICHTML', 'Statichtml', '<em>It\'s a html static text</em>', array('statichtml')),
            array('note' => 'Note field - tip on a yellow area'),
        ),
    ),
);

if ($_SERVER['REQUEST_METHOD'] == 'POST' && strlen($_REQUEST['save']) > 0 && check_bitrix_sessid())
{
    foreach ($aTabs as $aTab)
    {
        __AdmSettingsSaveOptions($moduleId, $aTab['OPTIONS']);
    }

    LocalRedirect($APPLICATION->GetCurPage() . '?lang=' . LANGUAGE_ID .
        '&mid_menu=1' .
        '&mid=' . urlencode($moduleId) .
        '&tabControl_active_tab=' . urlencode($_REQUEST['tabControl_active_tab']) .
        '&sid=' . urlencode($siteId));
}

$tabControl = new CAdminTabControl('tabControl', $aTabs);

echo '<form method="post" action="" name="bootstrap">';

$tabControl->Begin();

foreach ($aTabs as $aTab)
{
    $tabControl->BeginNextTab();
    __AdmSettingsDrawList($moduleId, $aTab['OPTIONS']);
}

echo bitrix_sessid_post();

$tabControl->Buttons(array('btnApply' => false, 'btnCancel' => false, 'btnSaveAndAdd' => false));
$tabControl->End();

echo '</form>';
