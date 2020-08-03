<?php

use Bitrix\Main\Loader;

Loader::registerAutoloadClasses(
    "boilerplate",
    array(
        "Boilerplate\\Test" => "lib/test.php",
    )
);