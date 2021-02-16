<?php
    // 变量
    // 定义变量: 在php中不需要任何关键字定义变量（赋值）
    $var1;  // 定义变量
    $var2 = 1;  // 定义变量的同时赋值

    // 访问变量
    echo $var2;

    // 修改变量
    $var2 = 2;
    echo '<hr/>', $var2;

    // 删除变量，使用unset(变量名字)
    unset($var2);
//    echo $var2;

    // 变量的命名规则
    $var_1;$var_var_1;$var_1;   // 正确格式

    // $1var;

    // 中文变量
    $中国 = 'China';
    echo '<hr/>', $中国;

    /**
     * 预定义变量
     * $_GET:获取所有表单以get方式提交的数据
     * $_POST:post提交的数据
     * $_REQUEST:get和post提交的都会保存
     * $GLOBALS:php中所有的全局变量
     * $_SERVER:服务器信息
     * $_SESSION:session会话数据
     * $_COOKIE:cookie会话数据
     * $_ENV:环境信息
     * $_FILES:用户上传的文件信息
     */

