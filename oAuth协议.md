oAuth 协议简介
	oAuth 协议为用户资源的授权提供了一个安全的，开放而又简易的标准。
	oAuth 不会使第三方触及到用户的帐号信息（用户名与密码）.
	oAuth 使第三方不用使用用户的用户名与密码就可以申请得到该用户姿源的授权.

oAuth 工作原理
	
	用户          请求            第三方登陆
	第三方        请求            QQ OAuth服务
	用户          输入账号密码    QQ OAuth服务
	QQ OAuth服务  传回code        第三方
	第三方        用户授权令牌    QQ OAuth服务
	QQ OAuth服务  传回AccessToken  第三方
	第三方        通过AccessToken请求用户数据或调用API



请求QQ oAuth登陆页面

	第一步:
	Request Token Url 没授权的令牌请求服务地址
					  第三方请求登录带有特定参数的URL
	https://graph.qq.com/oauth/...........&client_id = 1000020102
	&redirect_uri = http://www.magox.cn/......

	第二步：
	用户登陆成功后：第三方得到code   $_GET['code']

	第三步：
	User Authorization URL 用户授权的令牌请求服务地址
	通过code
	https://xxx.qq.com/oauth/-------
	&client_id = 10000000032
	&client_secret=XXXXXXXX
	&code = XXXXXXXX----(会过期的,只能使用一次)
	如果指明 need_refresh_token=true
	在返回的结果中带有一个RefreshToken
	当AccessToken快过期的时候 我们可以用RefreshToken刷新一个AccessToken
	refreshToken生命周期更长
	AccessToken -用户通过第三方应用访问oAuth接口的令牌;
	一般生命周期10天半个月以上

	第四步
	第三方通过AccessToken   post请求   QQ
	QQ----------返回json xml       第三方

	第三方    得到数据     再处理
