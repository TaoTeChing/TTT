<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/4/15
 * Time: 下午5:14
 */

namespace TradeData;


class BitstampTradeData extends BaseTradeData {

    public $class_key = "bitstamp";
    public $api_path  = "https://www.bitstamp.net/api/ticker/";
    public $file_name = "bitstamp.json";
    public $exchange_rate = 6.2;

    function __construct() {
        parent::__construct();

        //在此添加对此api特殊的初始化处理...
    }


    //解析此api的数据
    public function parseData() {
        $ret = array('key'=>0, 'time'=>0 , 'ticker'=>array());
        $tmp = json_decode($this->data, true);

        $this->data_key  = $ret['key'] = $this->class_key;
        $this->data_time = $ret['time'] = $tmp['timestamp'];
        $this->data_last = $ret['ticker']['last'] = $tmp['last'] * $this->exchange_rate;
        $this->data_sell = $ret['ticker']['sell'] = $tmp['ask'] * $this->exchange_rate;
        $this->data_buy  = $ret['ticker']['buy'] = $tmp['bid'] * $this->exchange_rate;

        $this->data = json_encode($ret);

    }

}