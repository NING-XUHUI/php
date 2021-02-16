<?php
    // php常量
    // 使用函数定义常量：define
    define("PI", 3.14);

    // 使用const关键字
    const PII = 3.14;

    echo PI, PII;

    /**
     * 常量命名规范
     * 常量的名字组成由字母、数字和下划线组成，不能以数字开头
     * 常量的名字通常是以大写字母为主（与变量以示区别）
     * 常量命名的规则比变量松散，可以使用特殊字符，只能以define定义
     */
    define('-_-', 222);
    echo constant('-_-');
    $a = 1;
//    const e = PI - $a;
//    echo e;
    // 系统常量
    echo '<br/>', PHP_VERSION, '<br/>', PHP_INT_SIZE, '<br/>';
    // 魔术常量
    echo '<hr/>';
    echo __DIR__, '<br/>', __FILE__, '<br/>', __LINE__, '<br/>';
    echo __LINE__;