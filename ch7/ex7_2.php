<?php
    function sum(...$DD){
        $total = 0;
        foreach ($DD as $i){
            $total += $i;
        }
        return $total;
    }

    echo "總共是：".sum(2,4,6,8);
?>