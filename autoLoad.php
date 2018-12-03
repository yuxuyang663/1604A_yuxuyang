<?php
/**
 * Created by PhpStorm.
 * User: 于旭阳
 * Date: 2018/12/3
 * Time: 9:01
 */

function __autoLoad($className){
    if ($className=='display'){
        require_once APP_PATH . '/fromwork/'.$className.'.php';
    }
    switch (substr($className,-5)){
        case 'oller':
            require_once APP_PATH . '/controller/'.$className.'.php';
            break;
        case  'Model':
            require_once APP_PATH . '/Model/'.$className.'.php';
            break;
    }
}