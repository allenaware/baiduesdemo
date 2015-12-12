1. 发布介绍
此客户端库基于PHP语言创建。所有的客户端调用类请参考*.php源文件，本客户端库旨在提供调用封装以及代理类生成，并不提供客户端 业务逻辑。
使用过程中如果遇到任何问题，请联系es服务的客服人员，发邮件至essupport@baidu.com。


2. 环境配置
请在调用环境中
*确认已安装PHP5版本以上的开发环境
*确认开发环境可以访问互联网，可以尝试ping api.es.baidu.com


3. 使用方式:
1) 填写相关配置
配置在apicore.php文件中，请填写
//DSPID
define('DSPID', USERID_HERE);

//TOKEN
define('TOKEN', 'TOKEN_HERE');

2) 调用API demo


4. changlog：
2013.5.30 V1 release
