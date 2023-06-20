<?php


if(!function_exists('getTotalMonth')){
    function getTotalMonth($items)
    {
        $sumItem = 0 ;
        foreach ($items as $item) {
            $sumItem+= $item->amount;
        }
        return $sumItem;
    }
}





