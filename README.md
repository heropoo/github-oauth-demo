# github-oauth-demo
github-oauth-demo

流程：
1. A 网站让用户跳转到 GitHub。
2. GitHub 要求用户登录，然后询问"A 网站要求获得 xx 权限，你是否同意？"
3. 用户同意，GitHub 就会重定向回 A 网站，同时发回一个授权码。
4. A 网站使用授权码，向 GitHub 请求令牌。
5. GitHub 返回令牌.
6. A 网站使用令牌，向 GitHub 请求用户数据。

参考：
* http://www.ruanyifeng.com/blog/2019/04/oauth-grant-types.html
* http://www.ruanyifeng.com/blog/2019/04/github-oauth.html