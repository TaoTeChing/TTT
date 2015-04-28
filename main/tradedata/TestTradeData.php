<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/4/15
 * Time: 下午5:14
 */

namespace TradeData;


class TestTradeData extends BaseTradeData {

    public $class_key = "test";
    public $api_path  = "http://api.huobi.com/staticmarket/ticker_btc_json.js";
    public $file_name = "huobi.json";

    function __construct() {
        parent::__construct();

        //在此添加对此api特殊的初始化处理...
    }


    //解析此api的数据
    public function parseData() {
        $ret = array('key'=>0, 'time'=>0 , 'ticker'=>array());
        $tmp = json_decode($this->data, true);

        $this->data_key  = $ret['key'] = $this->class_key;
        $this->data_time = $ret['time'] = $tmp['time'];
        $this->data_last = $ret['ticker']['last'] = $tmp['ticker']['last'];
        $this->data_sell = $ret['ticker']['sell'] = $tmp['ticker']['sell'];
        $this->data_buy  = $ret['ticker']['buy'] = $tmp['ticker']['buy'];

        $this->data = json_encode($ret);

    }

}