<?php
    // 运算符
    // 算数运算符
    $a = $b = 10;       // 连贯赋值运算：两个不同的变量
    $c = 0;

    var_dump($a / 0);

    echo '<hr/>';

    // 比较运算符
    $a = '123';
    $b = 123;

    // 判断相等
    var_dump($a == $b);
    var_dump($a === $b);

    echo '<hr/>';

    $a = 'weekend';
    $b = 'goods';

    var_dump($a == 'weekend' && $b == 'goods');

    var_dump($a == 'weekend' || $b == 'goods');

    echo '<hr/>';
    // 连接运算符
    $a = 'hello';
    $b = 123;

    echo $a . $b;
    $a .= $b;
    echo $a;

    // 错误抑制符
    echo '<hr/>';

    $a = 10;
    $b = 0;

    @($a % $b);














