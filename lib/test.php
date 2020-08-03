<?php

namespace Boilerplate;

use Boilerplate\DataTable;

class Test
{
    public static function get()
    {
        $result = DataTable::getList(array(
            'select' => array('*')
        ));

        return $result->fetch();
    }
}
