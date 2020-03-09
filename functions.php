<?php
/*
 * Author: Abdullah Al Faruk
 * Website: www.farukexpress.com
 * */
function isCheked($inputName, $value){
    return (isset($_REQUEST[$inputName]) && is_array($_REQUEST[$inputName]) && in_array($value, $_REQUEST[$inputName])) ? 'checked' : '';
}

function displayItems($items, $sItem){
    foreach($items as $item){
        $item  = strtolower($item);
        $itemN = ucfirst($item);
        $selected = '';
        if(in_array($item, $sItem)){
            $selected = 'selected';
        }
        printf('<option value="%s" %s>%s</option>', $item, $selected, $itemN);
    }
}