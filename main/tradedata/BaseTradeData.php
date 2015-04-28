<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/4/12
 * Time: 下午10:50
 */

namespace TradeData;


abstract class BaseTradeData {

    //todo 把派生类的重复代码提到这里来；
    //todo 把base变为抽象类；
    //todo 写文件改为写来内存测试下；

    public $class_key = ""; //必须在子类中设置；
    public $api_path = ""; //必须在子类中设置；
    public $file_name = ""; //必须在子类中设置；
    public $exchange_rate = 1; //汇率，默认为1；

    public $data; //json格式的所有数据

    public $data_key;
    public $data_time;
    public $data_last;
    public $data_buy;
    public $data_sell;


    function __construct(){
        //new 对象后，就生成内部数据接口，然后通过一系列方法来返回
        echo "Parent::__construct";
        //todo getData不能在构造中，因为交易时候可能无需用到；
        $this->getData();
        $this->parseData();
    }

    //获取数据
    public function getData(){
        $this->data = file_get_contents($this->api_path);
    }

    //写入数据
    public function writeData(){
        $fn =__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR."data".DIRECTORY_SEPARATOR.$this->file_name;
        $fd = fopen($fn , "w");
        fwrite($fd, $this->data);
        fclose($fd);
    }

    //解析数据
    public function parseData(){

        //必须在子类中完成，最后将结果赋值给$this->data；

    }



    //通用工具函数
    public  function tool1(){

    }

    public  function tool2(){

    }
}