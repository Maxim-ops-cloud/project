<?php

  function add_percent ($price, $percent){
   {
    return $price - ($price * $percent / 100);
   }

  }


  function add_percent_ship ($price, $percent, $ship){
   {
    return $price - ($price * $percent / 100) + $ship;
   }

  }


  ?>
