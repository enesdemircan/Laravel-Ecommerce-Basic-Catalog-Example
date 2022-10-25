<?php

 function totalOriginalCartPrice($datas)
{
    (float) $totalOriginalPrice = 0.00;
    foreach($datas as $data){
    
        $totalOriginalPrice = $data->original_price;
        $totalDiscountAmount= $data->discount_amount;
        $totalDiscountPrice = $data->discount_price;
    }
    $datas= ['totalOriginalPrice' => $totalOriginalPrice,'totalDiscountAmount' => $totalDiscountAmount,'totalDiscountPrice' => $totalDiscountPrice];
    return $datas;
}