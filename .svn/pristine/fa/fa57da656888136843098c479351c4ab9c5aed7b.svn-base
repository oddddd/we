<?php
/**
 * testApi.php
 *
 * @author: cnx7 <zysafe@live.cn> 2016-04-12
 */
?>

<html>
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/remarkable/1.6.2/remarkable.js"></script>
    <script>
        var md = new Remarkable({
            html: true,        // Enable html tags in source
            xhtmlOut: false,        // Use '/' to close single tags (<br />)
            breaks: false,        // Convert '\n' in paragraphs into <br>
            langPrefix: 'language-',  // CSS language prefix for fenced blocks
            linkify: false,        // Autoconvert url-like texts to links
            typographer: false,        // Enable smartypants and other sweet transforms

            // Highlighter function. Should return escaped html,
            // or '' if input not changed
            highlight: function (/*str, , lang*/) {
                return '';
            }
        });

        window.onload = function () {
            document.body.innerHTML = md.render(document.body.innerHTML);
        }


    </script>
</head>
<body>

# 接口测试专用

### 删除用户资料
<form action="/v2/api.php" method="POST">
    <input type="hidden" name="serv" value="deluser">
电话号码：<input type="text" name="tel" /> <input type="submit" value="删除">
</form>

### 用户状态变更
<form action="/v2/api.php" method="post">
    <input type="hidden" name="serv" value="lockuser">
电话号码：<input type="text" name="tel" />
    <input type="radio" name="lock" value="1" checked>冻结
    <input type="radio" name="lock" value="0">解锁
    <input type="submit" value="操作">
</form>

### 删除用户关联的微信账号信息
<form action="/v2/api.php" method="post">
    <input type="hidden" name="serv" value="delWxInfo">
电话号码：<input type="text" name="tel" /> <input type="submit" value="删除">
</form>

### 删除用户关联的微博账号信息
<form action="/v2/api.php" method="post">
    <input type="hidden" name="serv" value="delSinaInfo">
    电话号码：<input type="text" name="tel" /> <input type="submit" value="删除">
</form>

### 删除用户关联的QQ账号信息
<form action="/v2/api.php" method="post">
    <input type="hidden" name="serv" value="delQqInfo">
    电话号码：<input type="text" name="tel" /> <input type="submit" value="删除">
</form>


### 清空所有举报信息
<form action="/v2/api.php" method="post">
    <input type="hidden" name="serv" value="clearReport">
    并不需要你填写什么╮(╯▽╰)╭ 
    <input type="submit" value="清空所有举报信息">
</form>

</body>

</html>
