# TTT
TTT：Thunder Trade Table的缩写， 是一个自动化交易表格软件的demo，用来获取btc交易所数据，自动发现交易差价，其中使用swoole实现长连接和异步通信，还有面对对象的数据接口设计。


说明：本人只是搭了个架子，程序接口可以继续扩展交易功能和其他扩展功能，自行折腾。由于本人对swoole的理解非常初步，该project也只是作为演示，所以代码上没有花费太多精力，也没有太多的文档，实在抱歉，如有其他需要，请加我qq联系：8827110


### 如何运行:

需要swoole framework支持,github地址：https://github.com/swoole/framework
环境搭建见swoole官方社区：http://www.swoole.com/

时启动三个php文件：
php ./main/http_test.php
php ./main/get_data_test.php
php ./main/websocket_server.php

备注：data/为数据目录，需要读写权限。


运行截图如下：

![demopic](http://www.logix.top/assets/ttt_demo.png "TTT demo screenshot.")
