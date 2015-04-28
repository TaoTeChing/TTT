<?php

require './tradedata/BaseTradeData.php';
require './tradedata/HuobiTradeData.php';
require './tradedata/BtcChinaTradeData.php';
require './tradedata/TestTradeData.php';
require './tradedata/OkcoinTradeData.php';
require './tradedata/ChbtcTradeData.php';
require './tradedata/BitstampTradeData.php';
require './tradedata/BtceTradeData.php';


//todo 一旦某个接口fetal错误，程序会全部退出
//todo 阻塞问题

$i=0;



swoole_timer_add(2000, function($interval) {

    global $i;
    echo "#huobi ".$i++."\n";

    $data_obj = new \TradeData\HuobiTradeData();
    $data = $data_obj->data;
    echo $data."\n";
    $data_obj->writeData();

});

swoole_timer_add(2001, function($interval) {

    global $i;
    echo "#btcchina ".$i++."\n";

    $data_obj = new \TradeData\BtcChinaTradeData();
    $data = $data_obj->data;
    echo $data."\n";
    $data_obj->writeData();

});

swoole_timer_add(2002, function($interval) {

    global $i;
    echo "#okcoin ".$i++."\n";

    $data_obj = new \TradeData\OkcoinTradeData();
    $data = $data_obj->data;
    echo $data."\n";
    $data_obj->writeData();

});

swoole_timer_add(2003, function($interval) {

    global $i;
    echo "#chbtc ".$i++."\n";

    $data_obj = new \TradeData\ChbtcTradeData();
    $data = $data_obj->data;
    echo $data."\n";
    $data_obj->writeData();

});


swoole_timer_add(2004, function($interval) {

    global $i;
    echo "#bitstamp ".$i++."\n";

    $data_obj = new \TradeData\BitstampTradeData();
    $data = $data_obj->data;
    echo $data."\n";
    $data_obj->writeData();

});

swoole_timer_add(2005, function($interval) {

    global $i;
    echo "#btce ".$i++."\n";

    $data_obj = new \TradeData\BtceTradeData();
    $data = $data_obj->data;
    echo $data."\n";
    $data_obj->writeData();

});



